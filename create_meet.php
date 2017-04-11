<?php # create_user.php #2
// This script performs an INSERT query to add a record to the MEET table.

$page_title = 'Create Meet';
include ('includes/header.html');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array();

	// Check for a location name:
	if (!isset($_POST['Location_Name'])) {
		$errors[] = 'You forgot to enter the location name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['Location_Name']));
	}

	// Check for a street:
	if (!isset($_POST['Street'])) {
		$errors[] = 'You forgot to enter your street.';
	} else {
		$street = mysqli_real_escape_string($dbc, trim($_POST['Street']));
	}

	// Check for a city:
	if (!isset($_POST['City'])) {
		$errors[] = 'You forgot to enter City.';
	} else {
		$city = mysqli_real_escape_string($dbc, trim($_POST['City']));
	}

	// Check for a State:
	if (!isset($_POST['State'])) {
		$errors[] = 'You forgot to enter state.';
	} else {
		$state = mysqli_real_escape_string($dbc, trim($_POST['State']));
	}

	// Check for a ZIP:
	if (!isset($_POST['Zip'])) {
		$errors[] = 'You forgot to enter ZIP.';
	} else {
		$zip = mysqli_real_escape_string($dbc, trim($_POST['Zip']));
	}

	// Check for a Date:
	if (!isset($_POST['Date'])) {
		$errors[] = 'You forgot to enter date.';
	} else {
		$date = mysqli_real_escape_string($dbc, trim($_POST['Date']));
	}

	// Check for a Time:
	if (!isset($_POST['Time'])) {
		$errors[] = 'You forgot to enter time.';
	} else {
		$time = mysqli_real_escape_string($dbc, trim($_POST['Time']));
	}

	// Check for a competition name:
	if (!isset($_POST['Competition_Name'])) {
		$errors[] = 'You forgot to enter competition name.';
	} else {
		$name = mysqli_real_escape_string($dbc, trim($_POST['Competition_Name']));
	}
	
	if (!isset($errors)) { // If everything's OK.
	
		// Register the user in the database...
		// first, COMPETITOR
		$q = "INSERT INTO MEET (Location_Name, Street, City, State, Zip, Date, Time, Competition_Name) VALUES ('$ln', '$street', '$city','$state', '$zip', '$date', '$time', '$name')";
		$r = @mysqli_query($dbc, $q);
		
		if (!$r)
		{
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
		} else { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>You are now registered.</p><br />';	
		
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
		
	} // End of if (!isset($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>

<h1>Register</h1>
<form action="create_meet.php" method="post">

	<!-- First Name field -->
	<div>
		<label for="First_Name">Competition Name</label>
	</div>
	<div>
		<input type="text" name="Competition_Name" size="15" maxlength="20" value="<?php if (isset($_POST['Competition_Name'])) echo $_POST['Competition_Name']; ?>" required>
	</div>
	
	<!-- Last Name field -->
	<div>
		<label for="Last_Name">Location Name</label>
	</div>
	<div>
		<input type="text" name="Location_Name" size="15" maxlength="40" value="<?php if (isset($_POST['Location_Name'])) echo $_POST['Location_Name']; ?>" required>
	</div>
	
	<!-- Street field -->
	<div>
		<label for="Street">Street Address</label>
	</div>
	<div>
		<input type="text" name="Street" size="20" maxlength="60" value="<?php if (isset($_POST['Street'])) echo $_POST['Street']; ?>" required>
	</div>
	
	<!-- City field -->
	<div>
		<label for="City">City</label>
	</div>
	<div>
		<input type="text" name="City" size="20" maxlength="60" value="<?php if (isset($_POST['City'])) echo $_POST['City']; ?>" required>
	</div>

	<!-- State field -->
	<div>
		<label for="State" id="state_label">State</label>
	</div>
	<div>
		<select name="State" id="state" required>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">Dist of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>
	</div>
	
	<!-- Zip field -->
	<div>
		<label for="Zip">Zip Code</label>
	</div>
	<div>
		<input type="text" maxlength="10" name="Zip" value="<?php if (isset($_POST['Zip'])) echo $_POST['Zip']; ?>" required>
	</div>

	<!-- Date field -->
	<div>
		<label for="Date">Date of Meet (MM-DD-YYYY)</label>
	</div>
	<div>
		<input type="text" name="Date"  value="<?php if (isset($_POST['Date'])) echo $_POST['Date']; ?>" required>
	</div>
	
	<!-- Time field -->
	<div>
		<label for="Time">Time</label>
	</div>
	<div>
		<input type="text" maxlength="50" name="Time" value="<?php if (isset($_POST['Zip'])) echo $_POST['Zip']; ?>" required>
	</div>
	
	<div><input type="submit" name="submit" value="Register"></div>
</form>
<?php include ('includes/footer.html'); ?>
