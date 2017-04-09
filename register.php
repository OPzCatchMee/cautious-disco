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
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		
		// Make the query:
		$q = "INSERT INTO LOGIN (First_Name, Last_Name, Email, Password, Registration_Date) VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW() )";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>You are now registered. </p><p><br /></p>';	
		
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
	<p>First Name: <input type="text" name="First_Name" size="15" maxlength="20" value="<?php if (isset($_POST['First_Name'])) echo $_POST['First_Name']; ?>" /></p>
	<p>Last Name: <input type="text" name="Last_Name" size="15" maxlength="40" value="<?php if (isset($_POST['Last_Name'])) echo $_POST['Last_Name']; ?>" /></p>
	<p>Email Address: <input type="text" name="Email" size="20" maxlength="60" value="<?php if (isset($_POST['Email'])) echo $_POST['Email']; ?>"  /> </p>
	<p>Password: <input type="password" name="Password" size="10" maxlength="20" value="<?php if (isset($_POST['Password'])) echo $_POST['Password']; ?>"  /></p>
	<p>Confirm Password: <input type="password" name="Password_Confirm" size="10" maxlength="20" value="<?php if (isset($_POST['Password_Confirm'])) echo $_POST['Password_Confirm']; ?>"  /></p>
	<p><input type="submit" name="submit" value="Register" /></p>
</form>
<?php include ('./includes/footer.html'); ?>
