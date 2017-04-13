<?php # create_event.php #2
// This script performs an INSERT query to add a record to the event table.

$page_title = 'Create Event';
include ('includes/header.html');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require('mysqli_connect.php');

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

	// Check for a judge id:
	if (!isset($_POST['Judge_ID'])) {
		$errors[] = 'You forgot to enter judge id.';
	} else {
		$judge = mysqli_real_escape_string($dbc, trim($_POST['Judge_ID']));
	}

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
		$q = "INSERT INTO EVENT (Competitor_ID, Meet_ID, Judge_ID, Event_Type, Exec_Score, Difficulty_Score, Date, Time) VALUES ( '$competitor', '$meet', '$judge', '$event', '$exeScore', '$difScore','$date', '$time')";
		$r = @mysqli_query($dbc, $q);

		if (!$r)
		{
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The event could not be registered due to a system error. We apologize for any inconvenience.</p>';

			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
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
<form action="create_event.php" method="post">

	<!-- Competition ID field -->
	<div>
		<label for="Competitor_ID" id="competitor_label">Competitor ID</label>
	</div>
	<div>
		<select name="Competitor_ID" id="competitor" required>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
			<option value="9">9</option>
      <option value="10">10</option>
		</select>
	</div>

	<!-- Meet ID field -->
	<div>
		<label for="Meet_ID" id="meet_label">Meet ID</label>
	</div>
	<div>
		<select name="Meet_ID" id="meet" required>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>
	</div>

	<!-- Judge ID field -->
	<div>
		<label for="Judge_ID" id="judge_label">Judge ID</label>
	</div>
	<div>
		<select name="Judge_ID" id="judge" required>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
			<option value="9">9</option>
      <option value="10">10</option>
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
      <option value="still rings">still rings</option>
      <option value="parallel bars">Parallel Bars</option>
      <option value="horizontal bars">Horizontal Bars</option>
		</select>
	</div>

  <!-- Execution Score field -->
	<div>
		<label for="Exec_Score">Execution Score</label>
	</div>
	<div>
		<input type="text" maxlength="10" name="Exec_Score" value="<?php if (isset($_POST['Exec_Score'])) echo $_POST['Exec_Score']; ?>" required>
	</div>

  <!-- Difficulty Score field -->
  <div>
    <label for="Difficulty_Score">Difficulty Score</label>
  </div>
  <div>
    <input type="text" maxlength="10" name="Difficulty_Score" value="<?php if (isset($_POST['Difficulty_Score'])) echo $_POST['Difficulty_Score']; ?>" required>
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

	<div><input type="submit" name="submit" value="Register"></div>
</form>
<?php include ('includes/footer.html'); ?>
