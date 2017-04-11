<?php # pay_fee.php
// This script handles fee payment

$page_title = 'Pay Fee';
include ('./includes/header.html');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('./mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for card number
	if (!isset($_POST['card_number'])) {
		$errors[] = 'Enter your card number';
	} else {
		$card_number = mysqli_real_escape_string($dbc, trim($_POST['card_number']));
	}
	
	// Check for expiration date
	if (!isset($_POST['expiration_month']) || !isset($_POST['expiration_year'])) {
		$errors[] = 'Enter your expiration month and year';
	} else {
		$exp_month = mysqli_real_escape_string($dbc, trim($_POST['expiration_month']));
		$exp_year = mysqli_real_escape_string($dbc, trim($_POST['expiration_year']));
	}
	
	// Check for security code
	if (!isset($_POST['security_code'])) {
		$errors[] = 'Enter your card\'s security code';
	} else {
		$csc = mysqli_real_escape_string($dbc, trim($_POST['security_code']));
	}
	
	// Check for name
	if (!isset($_POST['first_name']) || !isset($_POST['last_name'])) {
		$errors[] = 'Enter your first and last name';
	} else {
		$fname = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
		$lname = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
	}
	
	// Check for address
	if (!isset($_POST['billing_address'])) {
		$errors[] = 'Enter your billing address';
	} else {
		$addr = mysqli_real_escape_string($dbc, trim($_POST['billing_address']));
		$addr2 = mysqli_real_escape_string($dbc, trim($_POST['billing_address_2']));
	}
	
	// Check for city
	if (!isset($_POST['billing_city'])) {
		$errors[] = 'Enter your city';
	} else {
		$city = mysqli_real_escape_string($dbc, trim($_POST['billing_city']));
	}
	
	// Check for 
	if (!isset($_POST['billing_state'])) {
		$errors[] = 'Enter your state';
	} else {
		$state = mysqli_real_escape_string($dbc, trim($_POST['billing_state']));
	}
	
	// Check for postal code
	if (!isset($_POST['postal_code'])) {
		$errors[] = 'Enter your ZIP or postal code';
	} else {
		$postal_code = mysqli_real_escape_string($dbc, trim($_POST['postal_code']));
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the fee payment
		
		// Make the query:
		//~$q = "INSERT INTO  (, Payment_Date) VALUES (, NOW() )";		
		//~$r = @mysqli_query ($dbc, $q); // Run the query.
		//~if ($r) { // If it ran OK.
		//~
			//~// Print a message:
			//~echo '<h1>Thank you!</h1>
		//~<p>You have successfully paid the fee. </p><br />';	
		//~
		//~} else { // If it did not run OK.
			//~
			//~// Public message:
			//~echo '<h1>System Error</h1>
			//~<p class="error">Your payment could not be made due to a system error. We apologize for any inconvenience.</p>'; 
			//~
			//~// Debugging message:
			//~echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						//~
		//~} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		include ('./includes/footer.html'); 
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><br />';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>
<h1>Pay Fees for Meet: </h1>
<form action="pay_fee.php" method="POST">
	<div><h3>Card Information</h3></div>
	<div>
		<label for="card_number" id="card_number_label">Card Number</label>
	</div>
	<div>
		<input type="text" name="card_number" id="card_number" size="16" maxlength="16" autocomplete="cc-number" required>
	</div>
	<div>
		<label for="expiration_month" id="expiration_label">Expiration Date and Security Code</label>
	</div>
	<div>
		<select name="expiration_month" id="expiration_month" required>
			<?php
			for ($month = 1; $month <= 12; $month++)
			{
				echo '<option value=\"'.$month.'\">'.$month.'</option>';
			}
			?>
		</select>
		<select name="expiration_year" id="expiration_year" required>
			<?php
			for ($year = date("Y"); $year <= 2040; $year++)
			{
				echo '<option value=\"'.$year.'\">'.$year.'</option>';
			}
			?>
		</select>
		<input type="text" name="security_code" id="security_code" size="4" maxlength="4" required>
	</div>
	<div><h3>Billing Information</h3></div>
	<div>
		<div>
			<label for="first_name" id="fist_name_label">First Name</label>
		</div>
		<div>
			<input type="text" maxlength="50" name="first_name" id="first_name" autocomplete="cc-given-name" required>
		</div>
		<div>
			<label for="last_name" id="last_name_label">Last Name</label>
		</div>
		<div>
			<input type="text" maxlength="50" name="last_name" id="last_name" autocomplete="cc-family-name" required>
		</div>
		<div>
			<label for="billing_address" id="billing_address_label">Billing Address</label>
		</div>
		<div>
			<input type="text" maxlength="100" name="billing_address" id="billing_address" autocomplete="address-line1" required>
		</div>
		<div>
			<label for="billing_address_2" id="billing_address_2_label">Billing Address, line 2</label>
		</div>
		<div>
			<input type="text" maxlength="100" name="billing_address_2" id="billing_address_2" autocomplete="address-line2">
		</div>
		<div>
			<label for="billing_city" id="billing_city_label">City</label>
		</div>
		<div>
			<input type="text" maxlength="50" name="billing_city" id="billing_city" autocomplete="address-level2" required>
		</div>
		<div>
			<label for="billing_state" id="billing_state_label">State</label>
		</div>
		<div>
			<select name="billing_state" id="billing_state" required>
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
		<div>
			<label for="billing_postal_code" id="billing_postal_code_label">ZIP or Postal Code</label>
		</div>
		<div>
			<input type="text" maxlength="16" name="billing_postal_code" id="billing_postal_code" autocomplete="postal-code" required>
		</div>
	</div>
	<input type="submit" name="submit" value="Submit">
</form>
<?php include ('./includes/footer.html'); ?>
