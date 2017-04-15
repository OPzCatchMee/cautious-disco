<?php #password.php
// This page lets a user change their password.

$page_title = 'Change Your Password';
include ('includes/header.html');

if (!isset($_SESSION['ID_Login'])) {
	echo '<p>You must be logged in to change your password.</p>';
	include ('includes/footer.html');
	exit();	
}

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.

	// Check for the current password:
	if (!isset($_POST['current_password'])) {
		$errors[] = 'You forgot to enter your current password.';
	} else {
		$curr_p = mysqli_real_escape_string($dbc, trim($_POST['current_password']));
	}

	// Check for a new password and match 
	// against the confirmed password:
	if (!!isset($_POST['new_password'])) {
		if ($_POST['new_password'] != $_POST['new_password_confirm']) {
			$errors[] = 'Your passwords do not match.';
		} else {
			$np = mysqli_real_escape_string($dbc, trim($_POST['new_password']));
		}
	} else {
		$errors[] = 'You forgot to enter your new password.';
	}
	
	if (empty($errors)) { // If everything's OK.

		// Check that they've entered the right current password:
		$user_id = $_SESSION['ID_Login'];
		$q = "SELECT Email
			FROM LOGIN
			WHERE ID_Login='$user_id' AND Password=SHA1('$curr_p')";
		$r = @mysqli_query($dbc, $q);
		$num = @mysqli_num_rows($r);
		if ($num == 1) { // Match was made.
			// Make the UPDATE query:
			$q = "UPDATE LOGIN
				SET Password=SHA1('$np')
				WHERE ID_Login='$user_id'";		
			$r = @mysqli_query($dbc, $q);
			
			if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

				// Print a message.
				echo '<h1>Thank you!</h1>
				<p>Your password has been updated.</p>';	

			} else { // If it did not run OK.

				// Public message:
				echo '<h1>System Error</h1>
				<p class="error">Your password could not be changed due to a system error. We apologize for any inconvenience.</p>'; 
				
				if (isset($_SESSION['Is_Admin'])) {
					// Debugging message:
					echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
				}
			}

			mysqli_close($dbc); // Close the database connection.

			// Include the footer and quit the script (to not show the form).
			include ('includes/footer.html'); 
			exit();
				
		} else { // Invalid password.
			echo '<h1>Error!</h1>
			<p class="error">Your current password is incorrect.</p>';
		}
		
	} else { // Report the errors.

		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />";
		}
		echo '</p><p>Please try again.</p>';
	
	} // End of if (empty($errors)) IF.

	mysqli_close($dbc); // Close the database connection.
		
} // End of the main Submit conditional.
?>
<h1>Change Your Password</h1>
<form action="password.php" method="post">
	<div>
		<label for="current_password" id="current_password_label">Current Password</label>
	</div>
	<div>
		<input type="password" name="current_password" id="current_password" required>
	</div>
	
	<div>
		<label for="new_password" id="new_password_label">New Password<label>
	</div>
	<div>
		<input type="password" name="new_password" id="new_password" required>
	</div>
	
	<div>
		<label for="new_password_confirm" id="new_password_confirm_label">Confirm New Password<label>
	</div>
	<div>
		<input type="password" name="new_password_confirm" id="new_password_confirm" required>
	</div>
	
	<p><input type="submit" name="submit" value="Change Password" /></p>
</form>
<?php include ('includes/footer.html'); ?>
