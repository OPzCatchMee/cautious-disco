<?php
// This page is for editing a event record.

$page_title = 'Edit a Event';
include ('includes/header.html');
echo '<h1>Edit a Event</h1>';

// Check for a valid event ID, through GET or POST:
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
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

	// Check for a Competition id:
	if (!isset($_POST['Competitor_ID'])) {
		$errors[] = 'You forgot to enter your competitor id.';
	} else {
		$competitor = mysqli_real_escape_string($dbc, trim($_POST['Competitor_ID']));
	}

	// Check for a Meet Id:
	if (!isset($_POST['Meet_ID'])) {
		$errors[] = 'You forgot to enter your meet id.';
	} else {
		$meet = mysqli_real_escape_string($dbc, trim($_POST['Meet_ID']));
	}

	// Check for a judge id:
	if (!isset($_POST['Judge_ID'])) {
		$errors[] = 'You forgot to enter your judge id.';
	} else {
		$judge = mysqli_real_escape_string($dbc, trim($_POST['Judge_ID']));
	}

	// Check for a Event Type:
	if (!isset($_POST['Event_Type'])) {
		$errors[] = 'You forgot to enter your event type.';
	} else {
		$event = mysqli_real_escape_string($dbc, trim($_POST['Event_Type']));
	}

	// Check for a execution score:
	if (!isset($_POST['Exec_Score'])) {
		$errors[] = 'You forgot to enter your execution score.';
	} else {
		$exeScore = mysqli_real_escape_string($dbc, trim($_POST['Exec_Score']));
	}

  // Check for a execution score:
  if (!isset($_POST['Difficulty_Score'])) {
    $errors[] = 'You forgot to enter your difficulty score.';
  } else {
    $difScore = mysqli_real_escape_string($dbc, trim($_POST['Difficulty_Score']));
  }

  // Check for a time:
  if (!isset($_POST['Time'])) {
    $errors[] = 'You forgot to enter your time.';
  } else {
    $time = mysqli_real_escape_string($dbc, trim($_POST['Time']));
  }

  // Check for a Date:
	if (!isset($_POST['Date'])) {
		$errors[] = 'You forgot to enter your date.';
	} else {
		$date = mysqli_real_escape_string($dbc, trim($_POST['Date']));
	}

	if (empty($errors)) { // If everything's OK.

		$q = "SELECT Event_ID FROM EVENT WHERE Event_Type='$event' AND Event_ID != $id";
		$r = @mysqli_query($dbc, $q);
		if (mysqli_num_rows($r) == 0) {

      // Make the query:
			$q = "UPDATE EVENT SET Competitor_ID='$competitor', Meet_ID='$meet', Judge_ID='$judge', Event_Type='$event', Exec_Score='$exeScore', Difficulty_Score='$difScore', Time='$time', Date='$date' WHERE Event_ID=$id LIMIT 1";
			$r = @mysqli_query ($dbc, $q);
			if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

				// Print a message:
				echo '<p>The event has been edited.</p>';

			} else { // If it did not run OK.
				echo '<p class="error">The event could not be edited due to a system error. We apologize for any inconvenience.</p>'; // Public message.
				echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
			}

		} else { // Already registered.
			echo '<p class="error">The event type has already been registered.</p>';
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

// Retrieve the event's information:
$q = "SELECT Competitor_ID, Meet_ID, Judge_ID, Event_Type, Exec_Score, Difficulty_Score, Time, Date FROM EVENT WHERE EVENT_ID=$id";
$r = @mysqli_query ($dbc, $q);

if (mysqli_num_rows($r) == 1) { // Valid event ID, show the form.

	// Get the event's information:
	$row = mysqli_fetch_array ($r, MYSQLI_NUM);

  	// Create the form:
  	echo '<form action="edit_events.php" method="post">
	<p>Competitor ID: <input type="text" name="Competitor_ID" size="15" maxlength="15" value="' . $row[0] . '" /></p>
	<p>Meet ID: <input type="text" name="Meet_ID" size="15" maxlength="15" value="' . $row[1] . '" /></p>
	<p>Judge_ID: <input type="text" name="Judge_ID" size="15" maxlength="15" value="' . $row[2] . '" /></p>
  <p>Event Type: <input type="text" name="Event_Type" size="15" maxlength="15" value="' . $row[3] . '" /></p>
  <p>Execution Score: <input type="text" name="Exec_Score" size="15" maxlength="30" value="' . $row[4] . '" /></p>
  <p>Difficulty Score: <input type="text" name="Difficulty_Score" size="20" maxlength="60" value="' . $row[5] . '"  /> </p>
  <p>Time: <input type="text" name="Time" size="15" maxlength="60" value="' . $row[6] . '"  /> </p>
  <p>Date: <input type="text" name="Date" size="20" maxlength="60" value="' . $row[7] . '"  /> </p>
  <p><input type="submit" name="submit" value="Submit" /></p>
  <input type="hidden" name="id" value="' . $id . '" />
  </form>';

} else { // Not a valid event ID.
	echo '<p class="error">Error outputting table.</p>';
}

mysqli_close($dbc);

include ('includes/footer.html');
?>
