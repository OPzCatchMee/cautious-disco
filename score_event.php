<?php # score_event.php
// This script performs an INSERT query to add a record to the event table.

$page_title = 'Score Event';
include ('includes/header.html');
	
if (!isset($_SESSION['Is_Judge']))
{
	echo '<p>You have accessed this page in error.</p>';
	include('includes/footer.html');
	exit();
}

require('mysqli_connect.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array();

	// Check for the Event id:
	if (!isset($_POST['Event_ID']) || !is_numeric($_POST['Event_ID'])) {
		$errors[] = 'You forgot to enter the event ID.';
	} else {
		$event = mysqli_real_escape_string($dbc, trim($_POST['Event_ID']));
	}

	$judge = $_SESSION['Staff_ID']; // judge is the person entering the form
	
	// Check if the judge has scored that event yet
	$q = "SELECT Exec_Score, Diff_Score
		FROM SCORES
		WHERE Event_ID=$event AND Judge_ID=$judge";
	$r = @mysqli_query($dbc, $q);
	if (mysqli_num_rows($r) != 0)
	{
		$errors[] = "You have already judged this event.";
	}

	// Check for a execution score:
	if (!isset($_POST['Exec_Score'])) {
		$errors[] = 'You forgot to enter the event type.';
	} else {
		$exeScore = mysqli_real_escape_string($dbc, trim($_POST['Exec_Score']));
	}

	// Check for a Difficulty Score:
	if (!isset($_POST['Difficulty_Score'])) {
		$errors[] = 'You forgot to enter the difficulty score.';
	} else {
		$difScore = mysqli_real_escape_string($dbc, trim($_POST['Difficulty_Score']));
	}

	if (empty($errors)) { // If everything's OK.

		// Register the event in the database...
		$q = "INSERT INTO SCORES (Event_ID, Judge_ID, Exec_Score, Diff_Score)
			VALUES ('$event', '$judge', $exeScore, $difScore)";
		$r = @mysqli_query($dbc, $q);

		if (!$r)
		{
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The event could not be registered due to a system error. We apologize for any inconvenience.</p>';

			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '</p><p>Query: ' . $q . '</p>';
		} else { // If it ran OK.

			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>The event was successfully now registered.</p><br />';
		}

		mysqli_close($dbc); // Close the database connection.
		// Include the footer and quit the script:
		include ('includes/footer.html');
		exit();

	} else { // Report the errors.

		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:</p>';
		foreach ($errors as $msg) { // Print each error.
			echo '<p class="error"> - ' . $msg . '</p>';
		}
		echo '<p>Please try again.</p>';

	} // End of if (empty($errors)) IF.

} // End of the main Submit conditional.
?>

<h1>Register</h1>
<form action="score_event.php" method="post">

	<!-- Event ID field -->
	<div>
		<label for="Event_ID" id="event_label">Event ID</label>
	</div>
	<div>
		<input name="Event_ID" id="event" required>
	</div>

	<!-- Execution Score field -->
	<div>
		<label for="Exec_Score" id="exec_score_label">Execution Score</label>
	</div>
	<div>
		<select name="Exec_Score" id="exec_score" required>
			<?php
			for ($num = 1; $num <= 10; $num++)
			{
				echo '<option value="' . $num . '">' . $num . '</option>';
			}
			?>
			
		</select>
	</div>

	<!-- Difficulty Score field -->
	<div>
		<label for="Difficulty_Score" id="difficulty_score_label">Difficulty Score</label>
	</div>
	<div>
		<select name="Difficulty_Score" id="difficulty_score" required>
			<?php
			for ($num = 1; $num <= 10; $num++)
			{
				echo '<option value="' . $num . '">' . $num . '</option>';
			}
			?>
			
		</select>
	</div>

	<div><input type="submit" name="submit" value="Submit"></div>
</form>
<?php include ('includes/footer.html'); ?>
