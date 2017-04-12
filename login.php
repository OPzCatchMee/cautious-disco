<?php # login.php #4
// This page processes the login form submission.
// The script now stores the HTTP_USER_AGENT value for added security.
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Need two helper files:
	require ('includes/login_functions.inc.php');
	require ('mysqli_connect.php');

	// Check the login:
	list ($check, $data) = check_login($dbc, $_POST['Email'], $_POST['Password']);
	//works for now but we should switch the if statement to something where there can be multiple admins
	//if we end up adding a column in login we can do this
	//$q = "SELECT ID_Login, First_Name FROM LOGIN WHERE Email='$_POST['EMAIL']' AND Admin=TRUE";
	//$r = @mysqli_query ($dbc, $q); // Run the query.
	// if it returns a row, then that means the user is an admin. if not then just regular login
	//if (mysqli_num_rows($r) == 1) {
	//redirect_user('admin.php');
	//}
	if ($check) { // OK!

		// Set the session data:
		session_start();
		$_SESSION['ID_Login'] = $data['ID_Login'];
		$_SESSION['First_Name'] = $data['First_Name'];
		$_SESSION['Competitor_ID'] = $data['Competitor'];
		$_SESSION['Staff_ID'] = $data['Staff'];
		$_SESSION['Is_Admin'] = $data['Is_Admin'];
		$_SESSION['Is_Judge'] = $data['Is_Judge'];

		// Store the HTTP_USER_AGENT:
		$_SESSION['agent'] = md5($_SERVER['HTTP_USER_AGENT']);

		//Check if admin
		if(!is_null($_SESSION['Staff_ID'])) {
			redirect_user('loggedin.php');
		}else if(!is_null($_SESSION['Is_Admin'])) {
			redirect_user('admin.php');
		}else{
			redirect_user('loggedin.php');
		}


	} else { // Unsuccessful!
		// Assign $data to $errors for login_page.inc.php:
		$errors = $data;
	}

	mysqli_close($dbc); // Close the database connection.
} // End of the main submit conditional.
// Create the page:
include ('login_page.inc.php');
?>
