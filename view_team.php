<?php
// Page to view a single team's details, or search for a team

$page_title = 'View a Team';
include ('includes/header.html');
echo '<br /><br />';

require ('mysqli_connect.php');

if(isset($_GET['id']))
{
	$team_id = $_GET['id'];
	
   //for team info
    $q = "SELECT Team_Name, Street, City, State, ZIP, Deleted
	FROM TEAM
	WHERE Team_ID=$team_id && Deleted = 0";

    //to count the number of team members
    $q2 = "SELECT a.Team_ID, b.Team_ID
	FROM TEAM as a, COMPETITOR as b
	WHERE a.Team_ID=$team_id & b.Team_ID=$team_id";
	
	$r = @mysqli_query ($dbc, $q); // Run the query.
	
	if (mysqli_affected_rows($dbc) == 1) // should only find one result
	{
		$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
		echo '<p>Team Name: '.$row['Team_Name'].'</p>
		<p>Address: '.$row['Street'].' '.$row['City'].' '.$row['State'].' '.$row['ZIP'].'</p>';
		//free the result to start second query
        	mysqli_free_result ($r);
        	$r = @mysqli_query ($dbc, $q2);
        	$rowcount = mysqli_num_rows($r);//counts number of rows which is number of members of a team
		echo '<p>Number of Members: '.$rowcount.'</p>';
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
