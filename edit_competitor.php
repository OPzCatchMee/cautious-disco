<?php # edit_competitor.php
// This page is for editing a user record.

$page_title = 'Edit a Competitor';
include ('includes/header.html');
echo '<h1>Edit a Competitor</h1>';

// Check for a valid user ID, through GET or POST:
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // From view_users.php
	$competitor_id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission.
	$competitor_id = $_POST['id'];
} else { // No valid ID, kill the script.
	echo '<p class="error">This page has been accessed in error.</p>';
	include ('includes/footer.html');
	exit();
}

// ensure that it's an admin or a competitor editing themselves
if ((isset($_SESSION['Competitor_ID']) && $_SESSION['Competitor_ID'] == $competitor_id) || $_SESSION['Is_Admin'])

require ('mysqli_connect.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array();
	
	// Check for the street:
	if (!isset($_POST['Address'])) {
		$errors[] = 'You forgot to enter the street.';
	} else {
		$street = mysqli_real_escape_string($dbc, trim($_POST['Address']));
	}
	
	// Check for address line 2:
	if (!!isset($_POST['Address_2'])) {
		$street .= " " . mysqli_real_escape_string($dbc, trim($_POST['Address_2']));
	}
	
	// Check for city:
	if (!isset($_POST['City'])) {
		$errors[] = 'You forgot to enter the city.';
	} else {
		$city = mysqli_real_escape_string($dbc, trim($_POST['City']));
	}
	// Check for state:
	if (!isset($_POST['State'])) {
		$errors[] = 'You forgot to enter the state.';
	} else {
		$state = mysqli_real_escape_string($dbc, trim($_POST['State']));
	}
	// Check for ZIP:
	if (!isset($_POST['ZIP'])) {
		$errors[] = 'You forgot to enter the postal code.';
	} else {
		$zip = mysqli_real_escape_string($dbc, trim($_POST['ZIP']));
	}

	// Check for phone:
	if (!isset($_POST['Phone'])) {
		$errors[] = 'You forgot to enter the phone.';
	} else {
		$phone = mysqli_real_escape_string($dbc, trim($_POST['Phone']));
	}

	// Check for email:
	if (!isset($_POST['Email'])) {
		$errors[] = 'You forgot to enter the email.';
	} else {
		$email = mysqli_real_escape_string($dbc, trim($_POST['Email']));
	}

	if (empty($errors)) { // If everything's OK.

		//  Test for unique email address:
		$q = "SELECT LOGIN.ID_Login, COMPETITOR_ID.Competitor
			FROM (LOGIN INNER JOIN COMPETITOR_ID ON LOGIN.Competitor_ID=COMPETITOR_ID.Competitor)
			WHERE LOGIN.Email='$email' AND COMPETITOR_ID.Competitor != $competitor_id";
		$r = @mysqli_query($dbc, $q);
		if (mysqli_num_rows($r) == 0) {
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			$user_id = $row['ID_Login']
			mysqli_free_result ($r);
			// Make the query:
			
			// nothing to update in COMPETITOR after moving stuff to LOGIN ?
			//~$q = "UPDATE COMPETITOR
				//~SET Street='$street', City='$city', State='$state', ZIP='$zip', Phone='$phone'
				//~WHERE ID=$competitor_id
				//~LIMIT 1";
			//~$r = @mysqli_query ($dbc, $q);
			//~if (mysql_affected_rows($dbc) == 0 || mysqli_affected_rows($dbc) == 1) { // if no row updated, or only 1 row
//~
			//~} else { // If it did not run OK.
				//~echo '<p class="error">The user could not be edited due to a system error. We apologize for any inconvenience.</p>'; // Public message.
				//~if ($_SESSION['Is_Admin'])
				//~{
					//~echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
				//~}
			//~}
//~
			//~mysqli_free_result ($r);
			
			// update LOGIN
			$q = "UPDATE LOGIN
				SET Email='$email', Street='$street', City='$city', State='$state', ZIP='$zip', Phone='$phone'
				WHERE ID_Login=$user_id
				LIMIT 1";
			$r = @mysqli_query ($dbc, $q);
			if (mysql_affected_rows($dbc) == 0 || mysqli_affected_rows($dbc) == 1) { // if no row updated, or only 1 row
				// Print a message:
				echo '<p>The user has been edited.</p>';

			} else { // If it did not run OK.
				echo '<p class="error">The user could not be edited due to a system error. We apologize for any inconvenience.</p>'; // Public message.
				if ($_SESSION['Is_Admin'])
				{
					echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
				}
			}

			mysqli_free_result ($r);

		} else { // Already registered.
			echo '<p class="error">The email address has already been registered.</p>';
		}

	} else { // Report the errors.
		echo '<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p>';

	} // End of if (empty($errors)) IF.
} // End of submit conditional.
// Always show the form...
// Retrieve the user's information:
$q = "SELECT First_Name, Last_Name, Street, City, State, ZIP, Phone, Email
	FROM (LOGIN INNER JOIN COMPETITOR_ID ON LOGIN.ID_Login=COMPETITOR_ID.User INNER JOIN COMPETITOR ON COMPETITOR_ID.Competitor=COMPETITOR.ID)
	WHERE COMPETITOR_ID.Competitor=$competitor_id";
$r = @mysqli_query ($dbc, $q);

if (mysqli_num_rows($r) == 1) { // Valid user ID, show the form.
	// Get the user's information:
	$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
	//~echo '<pre>' . print_r($row) . '</pre>';

	// Create the form:
	echo '<div>Editing ' . $row['First_Name'] . ' ' . $row['Last_Name'] . '</div>';
	echo '<form action="edit_competitor.php?id=' . $competitor_id .'" method="post">
	<div>
		<label for="Email">Email</label>
	</div>
	<div>
		<input type="text" name="Email" size="20" maxlength="60" value="' . $row['Email'] . '" required>
	</div>
	
	<div>
		<label for="Phone" id="phone_label">Phone Number</label>
	</div>
	<div>
		<input type="tel" maxlength="10" name="Phone" id="phone" value="' . $row['Phone'] . '" required>
	</div>
	
	<div>
		<label for="Address" id="address_label">Address</label>
	</div>
	<div>
		<input type="text" maxlength="100" name="Address" id="address" value="' . $row['Street'] . '" required>
	</div>
	<div>
		<label for="Address_2" id="address_2_label"> Address, line 2</label>
	</div>
	<div>
		<input type="text" maxlength="100" name="Address_2" id="address_2" >
	</div>
	
	<div>
		<label for="City" id="city_label">City</label>
	</div>
	<div>
		<input type="text" maxlength="50" name="City" id="city" value="' . $row['City'] . '" required>
	</div>
	
	<div>
		<label for="State" id="state_label">State</label>
	</div>
	<div>
		<input type="text" maxlength="2" length="2" name="State" id="state" value="' . $row['State'] . '" required>
	</div>
	
	<div>
		<label for="ZIP" id="postal_code_label">ZIP or Postal Code</label>
	</div>
	<div>
		<input type="text" maxlength="16" name="ZIP" id="postal_code" value="' . $row['ZIP'] . '" required>
	</div>
	
	<div><input type="submit" name="submit" value="Update"></div>
</form>';
} else { // Not a valid user ID.
	echo '<p class="error">This page has been accessed in error.</p>';
}
mysqli_close($dbc);

include ('includes/footer.html');
?>
