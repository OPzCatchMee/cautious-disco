<?php # register_event.php
// This script performs an INSERT query to add a record to the EVENT table.

$page_title = 'Register Event';
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

	// Check for a Event type:
	if (!isset($_POST['Event_Type'])) {
		$errors[] = 'You forgot to enter event.';
	} else {
		$event = mysqli_real_escape_string($dbc, trim($_POST['Event_Type']));
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
		$q = "INSERT INTO EVENT (Competitor_ID, Meet_ID, Event_Type, Date, Time)
			VALUES ('$competitor', '$meet', $event, '$date', '$time')";
		$r = @mysqli_query($dbc, $q);

		if (!$r)
		{
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The event could not be registered due to a system error. We apologize for any inconvenience.</p>';

			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '</p><p>Query: ' . $q . '</p>';
		} else { // If it ran OK.
			
			mysqli_free_result($r);
			
			// get Event ID
			$q = "SELECT Event_ID
				FROM EVENT
				ORDER BY Event_ID DESC
				LIMIT 1"; // maybe not best way to get?
			$r = @mysqli_query($dbc, $q);
			
			if (mysqli_affected_rows($dbc) == 1) // should only find one result
			{
				$row = mysqli_fetch_array($r, MYSQLI_NUM);
				$event_id = $row[0];

				// Print a message:
				echo '<h1>Thank you!</h1>
				<p>The event was successfully now registered.</p>
				<p>The event ID is ' . $event_id . '</p>';
			}
			else
			{
				echo '<p>Found incorrect number of results when trying to register the event: ' . mysqli_affected_rows($dbc) . '. Please contact the administrators.</p>';
			}
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
<form action="register_event.php" method="post">

	<!-- Competitor ID field -->
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

	<!-- Date field -->
	<div>
		<label for="Date">Date of Event (MM-DD-YYYY)</label>
	</div>
	<div>
		<input type="text" name="Date" required>
	</div>

	<!-- Time field -->
	<div>
		<label for="Time">Time (HH:MM)</label>
	</div>
	<div>
		<input type="text" maxlength="5" name="Time" required>
	</div>

	<div><input type="submit" name="submit" value="Submit"></div>
</form>
<?php include ('includes/footer.html'); ?>
