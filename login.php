<?php # login.php #4
// This page processes the login form submission.
// The script now stores the HTTP_USER_AGENT value for added security.

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Need two helper files:
	require ('includes/login_functions.inc.php');
	require ('./mysqli_connect.php');

	// Check the login:
	list ($check, $data) = check_login($dbc, $_POST['Email'], $_POST['Password']);

if ($check) { // OK!

	// Set the session data:
	session_start();
	$_SESSION['ID_Login'] = $data['ID_Login'];
	$_SESSION['First_Name'] = $data['First_Name'];

	// Store the HTTP_USER_AGENT:
	$_SESSION['agent'] = md5($_SERVER['HTTP_USER_AGENT']);

	// Redirect:
	redirect_user('loggedin.php');

} else { // Unsuccessful!

	// Assign $data to $errors for login_page.inc.php:
	$errors = $data;

	}
}

	mysqli_close($dbc); // Close the database connection.

} // End of the main submit conditional.

// Create the page:
include ('./login_page.inc.php');
?>
