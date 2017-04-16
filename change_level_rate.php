<?php # change_level_cost.php #2
// This script performs an UPDATE query to edit a record to the FEE table.

$page_title = 'Change level cost';
include ('includes/header.html');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require('mysqli_connect.php');

	$errors = array();

	// Check for a level:
	if (!isset($_POST['level'])) {
		$errors[] = 'You forgot to select level.';
	} else {
		$level = mysqli_real_escape_string($dbc, trim($_POST['level']));
	}

	// Check for a cost:
	if (!isset($_POST['cost']) || $_POST['cost'] < 0) {
		$errors[] = 'You entered an invalid cost.';
	} else {
		$zip = mysqli_real_escape_string($dbc, trim($_POST['Zip']));
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Update the cost in the database...
		$q = "UPDATE FEE SET cost='$cost' WHERE level=$level LIMIT 1";
		$r = @mysqli_query($dbc, $q);
		
		if (!$r) {
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The cost could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
		} else { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>The cost was successfully changed. ' . $q . '</p><br />';	
		
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

<h1>Change cost rates</h1>
<form action="change_level_rate.php" method="post">

	<!-- Level field -->
	<div>
		<label for="level" id="level">State</label>
	</div>
	<div>
		<select name="level" id="level" required>
			<option value=0>Entrance Fee</option>
			<option value=1>Level 1</option>
			<option value=2>Level 2</option>
			<option value=3>Level 3</option>
			<option value=4>Level 4</option>
			<option value=5>Level 5</option>
		</select>
	</div>
	
	<!-- Cost field -->
	<div>
		<label for="cost">Cost</label>
	</div>
	<div>
		<input type="number" name="cost" value="" required>
	</div>
	
	<div><input type="submit" name="submit" value="Submit >>"></div>
</form>
<?php include ('includes/footer.html'); ?>
