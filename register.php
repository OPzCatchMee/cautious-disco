<?php # register.php #2
// This script performs an INSERT query to add a record to the users table.

$page_title = 'Register';
include ('./includes/header.html');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('./mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a first name:
	if (empty($_POST['First_Name'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['First_Name']));
	}
	
	// Check for a last name:
	if (empty($_POST['Last_Name'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['Last_Name']));
	}
	
	// Check for an email address:
	if (empty($_POST['Email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['Email']));
	}
	
	// Check for a password and match against the confirmed password:
	if (!empty($_POST['Password'])) {
		if ($_POST['Password'] != $_POST['Password_Confirm']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = mysqli_real_escape_string($dbc, trim($_POST['Password']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	
	// Check for date of birth:
	if (empty($_POST['Date_Of_Birth'])) {
		$errors[] = 'You forgot to enter your date of birth.';
	} else {
		$dob = mysqli_real_escape_string($dbc, trim(\DateTime::createFromFormat('m-d-Y',$_POST['Date_Of_Birth'])->format('Y-m-d'))); // assume came in the form  MM-DD-YYYY
	}
	
	// Check for address:
	if (empty($_POST['Address'])) {
		$errors[] = 'You forgot to enter your address.';
	} else {
		$addr = mysqli_real_escape_string($dbc, trim($_POST['Address']));
	}
	
	// Check for address line 2:
	if (!empty($_POST['Address_2'])) {
		$addr .= " " .mysqli_real_escape_string($dbc, trim($_POST['Address_2']));
	}
	
	// Check for city:
	if (empty($_POST['City'])) {
		$errors[] = 'You forgot to enter your City.';
	} else {
		$city = mysqli_real_escape_string($dbc, trim($_POST['City']));
	}
	
	// Check for state:
	if (empty($_POST['State'])) {
		$errors[] = 'You forgot to enter your state.';
	} else {
		$state = mysqli_real_escape_string($dbc, trim($_POST['State']));
	}
	
	// Check for zip:
	if (empty($_POST['ZIP'])) {
		$errors[] = 'You forgot to enter your ZIP.';
	} else {
		$zip_code = mysqli_real_escape_string($dbc, trim($_POST['ZIP']));
	}
	
	// Check for phone:
	if (empty($_POST['Phone'])) {
		$errors[] = 'You forgot to enter your phone number.';
	} else {
		$phone = mysqli_real_escape_string($dbc, trim($_POST['Phone']));
	}
	
	// Check for sex:
	if (empty($_POST['Sex'])) {
		$errors[] = 'You forgot to enter your sex.';
	} else {
		$sex = mysqli_real_escape_string($dbc, trim($_POST['Sex']));
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		// first, COMPETITOR
		$q = "INSERT INTO COMPETITOR (Date_Of_Birth, Street, City, State, ZIP, Phone, Level, Sex) VALUES ('$dob', '$addr', '$city', '$state', '$zip_code', '$phone', 1, '$sex')";
		$r = @mysqli_query($dbc, $q);
		
		if (!$r)
		{
			echo '<p>Something went terribly wrong</p>';
		}
		
		mysqli_free_result ($r);
		
		// get Competitor_ID
		$q = "SELECT ID
		FROM COMPETITOR
		ORDER BY ID DESC
		LIMIT 1"; // maybe not best way to get?
		$r = @mysqli_query($dbc, $q);
		
		if (mysqli_affected_rows($dbc) == 1) // should only find one result
		{
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			$competitor_id = $row['ID'];
		}
		else
		{
			echo '<p>Found incorrect number of results when trying to register: ' . mysqli_affected_rows($dbc) . '. Please contact the administrators.</p>';
		}
		
		mysqli_free_result ($r);
		
		// LOGIN
		$q = "INSERT INTO LOGIN (First_Name, Last_Name, Email, Password, Registration_Date, Competitor_ID) VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW(), '$competitor_id')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>You are now registered.</p><br />';	
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		include ('./includes/footer.html'); 
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>
<h1>Register</h1>
<form action="register.php" method="post">
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
		<label for="Password">Password</label>
	</div>
	<div>
		<input type="password" name="Password" size="10" value="<?php if (isset($_POST['Password'])) echo $_POST['Password']; ?>" required>
	</div>
	
	<div>
		<label for="Password_Confirm">Confirm Password</label>
	</div>
	<div>
		<input type="password" name="Password_Confirm" size="10" value="<?php if (isset($_POST['Password_Confirm'])) echo $_POST['Password_Confirm']; ?>" required>
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
		<input type="text" maxlength="100" name="Address" id="address" autocomplete="address-line1" required>
	</div>
	<div>
		<label for="Address_2" id="address_2_label"> Address, line 2</label>
	</div>
	<div>
		<input type="text" maxlength="100" name="Address_2" id="address_2" autocomplete="address-line2">
	</div>
	
	<div>
		<label for="City" id="city_label">City</label>
	</div>
	<div>
		<input type="text" maxlength="50" name="City" id="city" autocomplete="address-level2" required>
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
		<input type="text" maxlength="16" name="ZIP" id="postal_code" autocomplete="postal-code" required>
	</div>
	
	<div>
		<label for="Phone" id="phone_label">Phone Number</label>
	</div>
	<div>
		<input type="tel" maxlength="10" name="Phone" id="phone" autocomplete="tel" required>
	</div>
	
	<div>
		<label for="Sex" id="sex_label">Sex</label>
	</div>
	<div>
		<select name="Sex" id="sex" required>
			<option value="M">M</option>
			<option value="F">F</option>
		</select>
	</div>
	
	<div><input type="submit" name="submit" value="Register"></div>
</form>
<?php include ('./includes/footer.html'); ?>
