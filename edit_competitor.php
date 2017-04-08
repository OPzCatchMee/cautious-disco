<?php # edit_competitor.php
// This page is for editing a user record.

$page_title = 'Edit a Competitor';
include ('includes/header.html');
echo '<h1>Edit a Competitor</h1>';

// Check for a valid user ID, through GET or POST:
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // From view_users.php
	$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission.
	$id = $_POST['id'];
} else { // No valid ID, kill the script.
	echo '<p class="error">This page has been accessed in error.</p>';
	include ('includes/footer.html');
	exit();
}

require ('./mysqli_connect.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array();

	// Check for a first name:
	if (empty($_POST['Competitor_F_Name'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['Competitor_F_Name']));
	}

	// Check for a middle name:
	if (empty($_POST['Competitor_MI'])) {
		$errors[] = 'You forgot to enter your middle name.';
	} else {
		$mn = mysqli_real_escape_string($dbc, trim($_POST['Competitor_MI']));
	}
	// Check for an last name:
	if (empty($_POST['Competitor_L_Name'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['Competitor_L_Name']));
	}
  // Check for an date of birth:
	if (empty($_POST['Date_Of_Birth'])) {
		$errors[] = 'You forgot to enter your date of birth.';
	} else {
		$birth = mysqli_real_escape_string($dbc, trim($_POST['Date_Of_Birth']));
	}
  // Check for an street:
	if (empty($_POST['Street'])) {
		$errors[] = 'You forgot to enter your street.';
	} else {
		$street = mysqli_real_escape_string($dbc, trim($_POST['Street']));
	}
  // Check for an city:
	if (empty($_POST['City'])) {
		$errors[] = 'You forgot to enter your city.';
	} else {
		$city = mysqli_real_escape_string($dbc, trim($_POST['City']));
	}
  // Check for an state:
	if (empty($_POST['State'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$state = mysqli_real_escape_string($dbc, trim($_POST['State']));
	}
  // Check for an ZIP:
	if (empty($_POST['ZIP'])) {
		$errors[] = 'You forgot to enter your ZIP.';
	} else {
		$zip = mysqli_real_escape_string($dbc, trim($_POST['ZIP']));
	}

  // Check for an phone:
	if (empty($_POST['Phone'])) {
		$errors[] = 'You forgot to enter your phone.';
	} else {
		$phone = mysqli_real_escape_string($dbc, trim($_POST['Phone']));
	}

  // Check for an email:
  if (empty($_POST['Email'])) {
    $errors[] = 'You forgot to enter your email.';
  } else {
    $email = mysqli_real_escape_string($dbc, trim($_POST['Email']));
  }

  // Check for an level:
	if (empty($_POST['Level'])) {
		$errors[] = 'You forgot to enter your level.';
	} else {
		$lvl = mysqli_real_escape_string($dbc, trim($_POST['Level']));
	}

  // Check for an sex:
	if (empty($_POST['Sex'])) {
		$errors[] = 'You forgot to enter your sex.';
	} else {
		$sex = mysqli_real_escape_string($dbc, trim($_POST['Sex']));
	}

  // Check for an team id:
	if (empty($_POST['Team_ID'])) {
		$errors[] = 'You forgot to enter your team id.';
	} else {
		$team = mysqli_real_escape_string($dbc, trim($_POST['Team_ID']));
	}


	if (empty($errors)) { // If everything's OK.

		//  Test for unique email address:
		$q = "SELECT ID FROM Competitor WHERE Email='$email' AND ID != $id";
		$r = @mysqli_query($dbc, $q);
		if (mysqli_num_rows($r) == 0) {
			// Make the query:
			$q = "UPDATE Competitor SET Competitor_F_Name='$fn', Competitor_MI='$mn', Competitor_L_Name='$ln', Date_Of_Birth='$birth', Street='$street', City='$city', State='$state', ZIP='$zip', Phone='$phone', Email='$email', Level='$lvl', Sex='$sex' ,Team_ID='$team' WHERE ID_Login=$id LIMIT 1";
			$r = @mysqli_query ($dbc, $q);
			if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.
				// Print a message:
				echo '<p>The user has been edited.</p>';

			} else { // If it did not run OK.
				echo '<p class="error">The user could not be edited due to a system error. We apologize for any inconvenience.</p>'; // Public message.
				echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
			}

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
$q = "SELECT Competitor SET Competitor_F_Name, Competitor_MI, Competitor_L_Name, Date_Of_Birth, Street, City, State, ZIP, Phone, Email, Level, Sex, Team_ID FROM LOGIN WHERE ID_Login=$id";
$r = @mysqli_query ($dbc, $q);

if (mysqli_num_rows($r) == 1) { // Valid user ID, show the form.
	// Get the user's information:
	$row = mysqli_fetch_array ($r, MYSQLI_NUM);

	// Create the form:
	echo '<form action="edit_user.php" method="post">
<p>First Name: <input type="text" name="Competitor_F_Name" size="15" maxlength="15" value="' . $row[0] . '" /></p>
<p>Middle Name: <input type="text" name="Competitor_MI" size="20" maxlength="60" value="' . $row[1] . '"  /> </p>
<p>Last Name: <input type="text" name="Competitor_L_Name" size="15" maxlength="30" value="' . $row[2] . '" /></p>
<p>Date of Birth: <input type="text" name="Date_Of_Birth" size="20" maxlength="60" value="' . $row[3] . '"  /> </p>
<p>Street: <input type="text" name="Street" size="20" maxlength="60" value="' . $row[4] . '"  /> </p>
<p>City: <input type="text" name="City" size="20" maxlength="60" value="' . $row[5] . '"  /> </p>
<p>State: <input type="text" name="State" size="20" maxlength="60" value="' . $row[6] . '"  /> </p>
<p>ZIP: <input type="text" name="ZIP" size="20" maxlength="60" value="' . $row[7] . '"  /> </p>
<p>Phone: <input type="text" name="Phone" size="20" maxlength="60" value="' . $row[8] . '"  /> </p>
<p>Email: <input type="text" name="Email" size="20" maxlength="60" value="' . $row[9] . '"  /> </p>
<p>Level: <input type="text" name="Level" size="20" maxlength="60" value="' . $row[10] . '"  /> </p>
<p>Sex: <input type="text" name="Sex" size="20" maxlength="60" value="' . $row[11] . '"  /> </p>
<p>Team ID: <input type="text" name="Team_ID" size="20" maxlength="60" value="' . $row[12] . '"  /> </p>
<p><input type="submit" name="submit" value="Submit" /></p>
<input type="hidden" name="id" value="' . $id . '" />
</form>';
} else { // Not a valid user ID.
	echo '<p class="error">This page has been accessed in error.</p>';
}
mysqli_close($dbc);

include ('includes/footer.html');
?>
