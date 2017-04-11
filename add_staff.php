<?php # add_staff.php 

$page_title = 'Add a Staff Member';
include ('includesAdmin/adminHeader.html');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

echo '<pre>' . print_r($_POST) . '</pre>';

	require ('mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a first name:
	if (!isset($_POST['First_Name'])) {
		$errors[] = 'You forgot to enter the first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['First_Name']));
	}
	
	// Check for a last name:
	if (!isset($_POST['Last_Name'])) {
		$errors[] = 'You forgot to enter the last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['Last_Name']));
	}
	
	// default password: <first name><last name>-Pasword
	// e.g. JohnSmith-Password
	$p = $fn . $ln . '-Password';
	
	// Check for an email address:
	if (!isset($_POST['Email'])) {
		$errors[] = 'You forgot to enter their email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['Email']));
	}
	
	// Check for SSN:
	if (!isset($_POST['SSN'])) {
		$errors[] = 'You forgot to enter their SSN.';
	} else {
		$ssn = mysqli_real_escape_string($dbc, trim($_POST['SSN']));
	}
	
	// Check for job title:
	if (!isset($_POST['Job_Title'])) {
		$errors[] = 'You forgot to enter their job title.';
	} else {
		$job = mysqli_real_escape_string($dbc, trim($_POST['Job_Title']));
	}
	
	// Check for a wage:
	if (!isset($_POST['Wage'])) {
		$errors[] = 'You forgot to enter their wage.';
	} else {
		$wage = mysqli_real_escape_string($dbc, trim($_POST['Wage']));
	}
	
	// Check for date of birth:
	if (!isset($_POST['Date_Of_Birth'])) {
		$errors[] = 'You forgot to enter their date of birth.';
	} else {
		$dob = mysqli_real_escape_string($dbc, trim(\DateTime::createFromFormat('m-d-Y',$_POST['Date_Of_Birth'])->format('Y-m-d'))); // assume came in the form  MM-DD-YYYY
	}
	
	// Check for address:
	if (!isset($_POST['Address'])) {
		$errors[] = 'You forgot to enter their address.';
	} else {
		$addr = mysqli_real_escape_string($dbc, trim($_POST['Address']));
	}
	
	// Check for city:
	if (!isset($_POST['City'])) {
		$errors[] = 'You forgot to enter their City.';
	} else {
		$city = mysqli_real_escape_string($dbc, trim($_POST['City']));
	}
	
	// Check for state:
	if (!isset($_POST['State'])) {
		$errors[] = 'You forgot to enter their state.';
	} else {
		$state = mysqli_real_escape_string($dbc, trim($_POST['State']));
	}
	
	// Check for zip:
	if (!isset($_POST['ZIP'])) {
		$errors[] = 'You forgot to enter their ZIP.';
	} else {
		$zip_code = mysqli_real_escape_string($dbc, trim($_POST['ZIP']));
	}
	
	// Check for phone:
	if (!isset($_POST['Phone'])) {
		$errors[] = 'You forgot to enter their home phone number.';
	} else {
		$phone = mysqli_real_escape_string($dbc, trim($_POST['Phone']));
	}
	
	// Check for admin status:
	if (!isset($_POST['Admin'])) {
		$errors[] = 'You forgot to enter their admin status.';
	} else {
		$is_admin = mysqli_real_escape_string($dbc, trim($_POST['Admin']));
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		// first, STAFF
		$q = "INSERT INTO STAFF (SSN, Job_Title, Hourly_Wage, Is_Admin) VALUES ('$ssn', '$job', '$wage', $is_admin)";
		$r = @mysqli_query($dbc, $q);
		
		if (!$r)
		{
			echo '<p>Something went terribly wrong. ERROR: 1</p>';
			mysqli_free_result ($r);
			mysqli_close($dbc); // Close the database connection.
			include ('includesAdmin/adminFooter.html'); 
			exit();
		}
		
		mysqli_free_result ($r);
		
		// get Staff_ID
		$q = "SELECT Staff_ID
		FROM STAFF
		ORDER BY Staff_ID DESC
		LIMIT 1"; // maybe not best way to get?
		$r = @mysqli_query($dbc, $q);
		
		if (mysqli_affected_rows($dbc) == 1) // should only find one result
		{
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			$staff_id = $row['Staff_ID'];
		}
		else
		{
			echo '<p>Found incorrect number of results when trying to register: ' . mysqli_affected_rows($dbc) . '. ERROR: 2</p>';
			mysqli_free_result ($r);
			mysqli_close($dbc); // Close the database connection.
			include ('includesAdmin/adminFooter.html'); 
			exit();
		}
		
		mysqli_free_result ($r);
		
		// LOGIN
		$q = "INSERT INTO LOGIN (First_Name, Last_Name, Email, Password, Date_of_Birth, Street, City, State, ZIP, Phone, Registration_Date)
			VALUES ('$fn', '$ln', '$e', SHA1('$p'), '$dob', '$addr', '$city', '$state', '$zip_code', '$phone', NOW())";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		
		if (!$r)
		{
			echo '<p>Something went terribly wrong. ERROR: 3</p>';
			mysqli_free_result ($r);
			mysqli_close($dbc); // Close the database connection.
			include ('includesAdmin/adminFooter.html'); 
			exit();
		}
		
		mysqli_free_result ($r);
		
		// get ID_Login
		$q = "SELECT ID_Login
		FROM LOGIN
		ORDER BY ID_Login DESC
		LIMIT 1"; // maybe not best way to get?
		$r = @mysqli_query($dbc, $q);
		
		if (mysqli_affected_rows($dbc) == 1) // should only find one result
		{
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			$user_id = $row['ID_Login'];
		}
		else
		{
			echo '<p>Found incorrect number of results when trying to register: ' . mysqli_affected_rows($dbc) . '. ERROR: 4</p>';
			mysqli_free_result ($r);
			mysqli_close($dbc); // Close the database connection.
			include ('includesAdmin/adminFooter.html'); 
			exit();
		}
		
		mysqli_free_result($r);
		
		// STAFF_ID
		$q = "INSERT INTO STAFF_ID (User, Staff)
			VALUES ('$user_id', '$staff_id')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<p>Staff member successfully registered.</p><br />';	
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_free_result ($r);
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		include ('includesAdmin/adminFooter.html'); 
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><br />';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>
<h1>Register</h1>
<form action="add_staff.php" method="post">
	<div>
		<label for="First_Name">First Name</label>
	</div>
	<div>
		<input type="text" name="First_Name" size="15" maxlength="20" value="<?php if (isset($_POST['First_Name'])) echo $_POST['First_Name']; ?>" required>
	</div>
	
	<div>
		<label for="Last_Name">Last name</label>
	</div>
	<div>
		<input type="text" name="Last_Name" size="15" maxlength="40" value="<?php if (isset($_POST['Last_Name'])) echo $_POST['Last_Name']; ?>" required>
	</div>
	
	<div>
		<label for="Email">Email</label>
	</div>
	<div>
		<input type="text" name="Email" size="20" maxlength="60" value="<?php if (isset($_POST['Email'])) echo $_POST['Email']; ?>" required>
	</div>
	
	<div>
		<label for="SSN">Social Security Number</label>
	</div>
	<div>
		<input type="text" maxlength="9" name="SSN" required>
	</div>
	
	<div>
		<label for="Job_Title">Job Title</label>
	</div>
	<div>
		<input type="text" name="Job_Title" required>
	</div>
	
	<div>
		<label for="Wage">Hourly Wage</label>
	</div>
	<div>
		<input type="text" name="Wage" required>
	</div>
	
	<div>
		<label for="Date_Of_Birth">Date of Birth (MM-DD-YYYY)</label>
	</div>
	<div>
		<input type="text" name="Date_Of_Birth" required>
	</div>
	
	<div>
		<label for="Address" id="address_label">Address</label>
	</div>
	<div>
		<input type="text" maxlength="100" name="Address" id="address" required>
	</div>
	
	<div>
		<label for="City" id="city_label">City</label>
	</div>
	<div>
		<input type="text" maxlength="50" name="City" id="city" required>
	</div>
	
	<div>
		<label for="State" id="state_label">State</label>
	</div>
	<div>
		<select name="State" id="state" required>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">Dist of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>
	</div>
	
	<div>
		<label for="ZIP" id="postal_code_label">ZIP or Postal Code</label>
	</div>
	<div>
		<input type="text" maxlength="16" name="ZIP" id="postal_code" required>
	</div>
	
	<div>
		<label for="Phone" id="phone_label">Home Phone Number</label>
	</div>
	<div>
		<input type="tel" maxlength="10" name="Phone" id="phone" required>
	</div>
	
	<div>
		<label for="Admin" id="admin_label">Are they a site admin?</label>
	</div>
	<div>
		<input type="radio" name="Admin" value="1"> Yes
		<input type="radio" name="Admin" value="0"> No
	</div>
	
	<div><input type="submit" name="submit" value="Register"></div>
</form>
<?php include ('includes/footer.html'); ?>
