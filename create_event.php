<?php # create_event.php #2
// This script performs an INSERT query to add a record to the event table.

$page_title = 'Create Event';
include ('includes/header.html');
	require('mysqli_connect.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array();

	// Check for a Competitor id:
	if (!isset($_POST['Competitor_ID'])) {
		$errors[] = 'You forgot to enter competitor id.';
	} else {
		$competitor = mysqli_real_escape_string($dbc, trim($_POST['Competitor_ID']));
	}

	// Check for a meet id:
	if (!isset($_POST['Meet_ID'])) {
		$errors[] = 'You forgot to enter meet id.';
	} else {
		$meet = mysqli_real_escape_string($dbc, trim($_POST['Meet_ID']));
	}
	
	// Check if that competitor is signed up for that meet
	$q = "SELECT Fee_Paid
		FROM COMPETITOR_COMPETES_AT
		WHERE Meet_ID=$meet AND Competitor_ID=$competitor";
	$r = @mysqli_query($dbc, $q);
	if (mysqli_num_rows($r) == 0)
	{
		$errors[] = "That competitor is not registered for this meet.";
	}

	$judge = $_SESSION['Staff_ID']; // judge is the person entering the form

	// Check for a Event type:
	if (!isset($_POST['Event_Type'])) {
		$errors[] = 'You forgot to enter event.';
	} else {
		$event = mysqli_real_escape_string($dbc, trim($_POST['Event_Type']));
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

	// Check for a Date:
	if (!isset($_POST['Date'])) {
		$errors[] = 'You forgot to enter date.';
	} else {
		$date = mysqli_real_escape_string($dbc, trim(\DateTime::createFromFormat('m-d-Y',$_POST['Date'])->format('Y-m-d'))); // assume came in the form  MM-DD-YYYY
	}

	// Check for a Time:
	if (!isset($_POST['Time'])) {
		$errors[] = 'You forgot to enter time.';
	} else {
		$time = mysqli_real_escape_string($dbc, trim($_POST['Time'].":00"));
	}

	if (empty($errors)) { // If everything's OK.

		// Register the event in the database...
		$q = "INSERT INTO EVENT (Competitor_ID, Meet_ID, Judge_ID, Event_Type, Exec_Score, Difficulty_Score, Date, Time) VALUES ( '$competitor', '$meet', '$judge', '$event', '$exeScore', '$difScore', '$date', '$time')";
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
<form action="create_event.php" method="post">

	<!-- Competition ID field -->
	<div>
		<label for="Competitor_ID" id="competitor_label">Competitor ID</label>
	</div>
	<div>
		<select name="Competitor_ID" id="competitor" required>
		<?php
			$q = "SELECT ID
				FROM COMPETITOR
				WHERE Deleted=0";
			$r = @mysqli_query ($dbc, $q); // Run the query.
			
			while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
				echo '
				<option value="' . $row[0] . '">' . $row[0] . '</option>';
			}
			
			mysqli_free_result ($r);
		?>
		
		</select>
	</div>

	<!-- Meet ID field -->
	<div>
		<label for="Meet_ID" id="meet_label">Meet ID</label>
	</div>
	<div>
		<select name="Meet_ID" id="meet" required>
		<?php
			$q = "SELECT ID
				FROM MEET
				WHERE Deleted=0";
			$r = @mysqli_query ($dbc, $q); // Run the query.
			
			while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
				echo '
				<option value="' . $row[0] . '">' . $row[0] . '</option>';
			}
			
			mysqli_free_result ($r);
		?>
		
		</select>
	</div>

	<!-- Event Type field -->
	<div>
		<label for="Event_Type" id="event_label">Event Type</label>
	</div>
	<div>
		<select name="Event_Type" id="event" required>
			<option value="floor">Floor Exercise</option>
			<option value="balance beam">Balance Beam</option>
			<option value="vault">Vault</option>
			<option value="uneven bars">Uneven Bars</option>
			<option value="pommel horse">Pommel Horse</option>
			<option value="still rings">Still rings</option>
			<option value="parallel bars">Parallel Bars</option>
			<option value="horizontal bars">Horizontal Bars</option>
		</select>
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
				echo '<option value=\"' . $num . '\">' . $num . '</option>';
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
				echo '<option value=\"' . $num . '\">' . $num . '</option>';
			}
			?>
			
		</select>
	</div>

	<!-- Date field -->
	<div>
		<label for="Date">Date of Event (MM-DD-YYYY)</label>
	</div>
	<div>
		<input type="text" name="Date"  value="<?php if (isset($_POST['Date'])) echo $_POST['Date']; ?>" required>
	</div>

	<!-- Time field -->
	<div>
		<label for="Time">Time (HH:MM)</label>
	</div>
	<div>
		<input type="text" maxlength="5" name="Time" value="<?php if (isset($_POST['Time'])) echo $_POST['Time']; ?>" required>
	</div>

	<div><input type="submit" name="submit" value="Sumbit"></div>
</form>
<?php include ('includes/footer.html'); ?>
