<?php
// Page to view a single competitor's details, or search for a competitor

$page_title = 'View a Competitor';
include ('includes/header.html');
echo '<br /><br />';

require ('mysqli_connect.php');

function age($birth_date) // thanks to Peter Hamilton https://stackoverflow.com/a/5938386
{
	list($y,$m,$d) = explode("-",$birth_date);
	$y_diff  = date("Y") - $y;
	$m_diff = date("m") - $m;
	$d_diff   = date("d") - $d;
	if ($m_diff < 0 || $d_diff < 0) { $y_diff--; }
	return $y_diff;
}

if(isset($_GET['id']))
{
	$competitor_id = $_GET['id'];
	
	$q = "SELECT First_Name, Last_Name, Email, Date_Of_Birth, Street, City, State, ZIP, Phone, Sex, Team_ID
		FROM (LOGIN INNER JOIN COMPETITOR_ID ON LOGIN.ID_Login=COMPETITOR_ID.User INNER JOIN COMPETITOR ON COMPETITOR_ID.Competitor=COMPETITOR.ID)
		WHERE COMPETITOR_ID.Competitor=$competitor_id";
	$r = @mysqli_query ($dbc, $q); // Run the query.
	
	if (mysqli_affected_rows($dbc) == 1) // should only find one result
	{
		$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
		echo '<p>Name: ' . $row['First_Name'] . ' ' . $row['Last_Name'] . '</p>
		<p>Age: ' . age($row['Date_Of_Birth']) . '</p>';
		if ($_SESSION['Is_Admin'] || $_SESSION['Competitor_ID'] == $competitor_id) {
			echo '<p>Phone number: ' . $row['Phone'] . '</p>
			<p>Email: ' . $row['Email'] . '</p>
			<p>Address: ' . $row['Street'] . ', ' . $row['City'] . ', ' . $row['State'] . ' ' . $row['ZIP'] . '</p>';
		}
		if (!is_null($row['Team_ID'])) {
			echo '<p>Team: <a href="view_team.php?id=' . $row['Team_ID'] . '">' . $row['Team_ID'] . '</a></p>';
		}
		
		echo '<p><a href="view_events.php?competitor=' . $competitor_id . '">View this competitor\'s events</a></p>';
	}
	else
	{
		echo '<p>No results found for ID ' . $competitor_id . '</p>';
	}

	mysqli_free_result ($r);
}
else
{
	echo '<p>No competitor ID selected</p>';
}
mysqli_close($dbc);

include ('includes/footer.html');
?>
