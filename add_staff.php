<?php

$page_title = 'Add a Staff Member';
include ('./includesAdmin/adminHeader.html');
echo '<h1><center>Add a Staff Member</center></h1>';
require ('./mysqli_connect.php');

//$ssn = $job_title = $wage = $street =$city = $state = $zip = $home_phone = $dob = $staff_id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($ssn) || empty($job_title) || empty($wage) || empty($street) || empty($city) ||
    empty($state) || empty($zip) || empty($home_phone)|| empty($dob)|| empty( $staff_id) || empty($isadmin))
    {
     echo 'Please check to make sure all fields are entered and whether or not this person is an admin is selected';
    }
  else
  {
    $ssn = test_input($_POST["ssn"]);
    $job_title = test_input($_POST["job_title"]);
    $wage = test_input($_POST["wage"]);
    $street = test_input($_POST["street"]);
    $city = test_input($_POST["city"]);
    $state = test_input($_POST["state"]);
    $zip = test_input($_POST["zip"]);
    $home_phone = test_input($_POST["home_phone"]);
    $dob = test_input($_POST["dob"]);
    $staff_id = test_input($_POST["staff_id"]);
   }
	

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
	
$q = "INSERT INTO `STAFF`(`SSN`, `Job_Title`, `Hourly_Wage`, `Street`, `City`, `State`, `ZIP`, `Home_Phone`, `Date_of_Birth`, `Staff_ID`, `Is_Admin`)
VALUES ([$ssn],[$job_title],[$wage],[$street],[#city],[$state],[$zip],[$home_phone],[$dob],[$staff_id],[$isadmin])";
$r = @mysqli_query($dbc, $q);

if (!$r)
{
	echo '<p>Something went terribly wrong</p>';
}
		
		mysqli_free_result ($r);
    mysqli_close($dbc);
}


}
?>
<!-- `SSN`, `Job_Title`, `Hourly_Wage`, `Street`, `City`, `State`, `ZIP`, `Home_Phone`, `Date_of_Birth`, `Staff_ID`, `Is_Admin-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  SSN: <input type="text" name="ssn">
  <br><br>
  Job Title: <input type="text" name="job_title">
  <br><br>
  Hourly Wage: <input type="text" name="wage">
  <br><br>
  Street: <input type="text" name="street">
  <br><br>
  City: <input type="text" name="city">
  <br><br>
  State <input type="text" name="state">
  <br><br>
  Zip: <input type="text" name="zip">
  <br><br>
  Home Phone: <input type="text" name="home_phone">
  <br><br>
  Date of Birth: <input type="text" name="dob">
  <br><br>
  Staff ID: <input type="text" name="staff_id">
  <br><br>
  
  Is he/she an admin?<br>
  <input type="radio" name="isadmin" value="1">Yes<br>
  <input type="radio" name="isadmin" value="0">No
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


<?php
include ('./includesAdmin/adminFooter.html');

?>
