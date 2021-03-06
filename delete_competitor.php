<?php
// This page is for deleting a competitors record.

$page_title = 'Delete a Competitor';
include ('includes/header.html');
echo '<h1>Delete a Competitor</h1>';

// Check for a valid competitor ID, through GET or POST:
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // From view_competitors.php
	$competitor_id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission.
	$competitor_id = $_POST['id'];
} else { // No valid ID, kill the script.
	echo '<p class="error">There was an issue reading the ID = '. $competitor_id.'</p>';
	include ('includes/footer.html');
	exit();
}

require ('mysqli_connect.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['sure'] == 'Yes') { // Delete the record.
		
		$q = "SELECT ID_Login, User
			FROM (LOGIN INNER JOIN COMPETITOR_ID ON LOGIN.ID_Login=COMPETITOR_ID.User)
			WHERE COMPETITOR_ID.Competitor = $competitor_id";
		$r = @mysqli_query ($dbc, $q);
		if (mysqli_num_rows($r) == 1) { // If it ran OK.
			$row = mysqli_fetch_array($r, MYSQLI_NUM);
			$user_id = $row[0];
		} else { // If the query did not run OK.
			echo '<p class="error">The competitor could not be deleted due to a system error.</p>'; // Public message.
			if ($_SESSION['Is_Admin'])
			{
				echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
			}
			include ('includes/footer.html');
			exit();
		}

		// Make the query:
		$q = "UPDATE COMPETITOR
				SET Deleted=1
				WHERE ID = $competitor_id";
		$r = @mysqli_query ($dbc, $q);
		if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.
			
		} else { // If the query did not run OK.
			echo '<p class="error">The competitor could not be deleted due to a system error.</p>'; // Public message.
			if ($_SESSION['Is_Admin'])
			{
				echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
			}
			include ('includes/footer.html');
			exit();
		}
		
		$q = "UPDATE LOGIN
				SET Deleted=1
				WHERE ID_Login = $user_id";
		$r = @mysqli_query ($dbc, $q);
		if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

			// Print a message:
			echo '<p>The competitor has been deleted.</p>';

		} else { // If the query did not run OK.
			echo '<p class="error">The competitor could not be deleted due to a system error.</p>'; // Public message.
			if ($_SESSION['Is_Admin'])
			{
				echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
			}
			include ('includes/footer.html');
			exit();
		}

	} else { // No confirmation of deletion.
		echo '<p>The competitor has NOT been deleted.</p>';
	}

} else { // Show the form.

	// Retrieve the competitor's information:
	$q = "SELECT ID_Login, Competitor_ID
			FROM (LOGIN INNER JOIN COMPETITOR_ID ON LOGIN.ID_Login=COMPETITOR_ID.User)
			WHERE COMPETITOR_ID.Competitor = $competitor_id";
	$r = @mysqli_query ($dbc, $q);

	if (mysqli_num_rows($r) == 1) { // Valid competitor ID, show the form.

		// Get the competitor's information:
		$row = mysqli_fetch_array ($r, MYSQLI_NUM);

		echo "Are you sure you want to delete this competitor?";

		// Create the form:
		echo '<form action="delete_competitor.php" method="post">
	<input type="radio" name="sure" value="Yes" /> Yes
	<input type="radio" name="sure" value="No" checked="checked" /> No
	<input type="submit" name="submit" value="Submit" />
	<input type="hidden" name="id" value="' . $competitor_id . '" />
	</form>';

	} else { // Not a valid competitor ID.
		echo '<p class="error">This page has been accessed in error.</p>';
	}

} // End of the main submission conditional.

mysqli_close($dbc);

include ('includes/footer.html');
?>
