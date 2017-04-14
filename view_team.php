<?php
// Page to view a single team's details, or search for a team

$page_title = 'View a Team';
include ('includes/header.html');
echo '<br /><br />';

require ('mysqli_connect.php');

if(isset($_GET['id']))
{
	$team_id = $_GET['id'];
	
	$q = "SELECT Team_Name, Street, City, State, ZIP
	FROM TEAM
	WHERE Team_ID=$team_id";
	$r = @mysqli_query ($dbc, $q); // Run the query.
	
	if (mysqli_affected_rows($dbc) == 1) // should only find one result
	{
		$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
		echo '<p>Team Name: '.$row['Team_Name'].'</p>
		<p>Address: '.$row['Street'].' '.$row['City'].' '.$row['State'].' '.$row['ZIP'].'</p>
		<!--<p>Number of Members: '.$row['Num_Members'].'</p>will add correct query when I get it-->'; 
	}
	else
	{
		echo '<p>No results found for ID '.$team_id.'</p>';
	}

	mysqli_free_result ($r);
}
else
{
	echo '<p>No Team ID selected</p>';
}
mysqli_close($dbc);

include ('includes/footer.html');
?>
