<?php
//Public's view of the page (what a person that is not logged in/logged in can see)

$page_title = 'View the Current Users';
include ('./includes/header.html');
echo '<h1>Our Upcoming Events!</h1><br />';

require ('./mysqli_connect.php');

$team = (isset($_GET['team'])) ? $_GET['team'] : 'none';
if($team=='none')
{
	$q = "SELECT ID,Location_Name, Street, City, State, ZIP, DATE_FORMAT(Date, '%M %d, %Y') AS Date, TIME_FORMAT(Time, '%H:%i') AS Time, Competition_Name 
	FROM MEET
	WHERE Date>=CURRENT_DATE()
	ORDER BY Date DESC";
	$r = @mysqli_query ($dbc, $q); // Run the query.
	echo '<table align="center">
	<thead>
		<th>Venue</th>
		<th>Location</th>
		<th>Competition Name</th>
		<th>Date</th>
		<th>Time</th>
	</thead>
	';
	 
	$meetIDS = array();
	$x=0;
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        $meetIDS[$x] = $row['ID'];//place id of each meet in an array
		echo '<tr>
			<td><a href="/public.php?team=' . $meetIDS[$x] . '">' . $row['Location_Name'] . '</a></td>
			<td>' . $row['Street'] .' ' . $row['City'] .' , ' . $row['State'] .' ' . $row['ZIP'] .'</td>
	                 <!--add a link to another php page to view teams competing according to meet id -->
	        <td>' . $row['Competition_Name'] . '</td>
			<td>' . $row['Date'] . '</td>
			<td>' . $row['Time'] . '</td>
	
		</tr>
		';
		$x++;//increment the array
	} // End of WHILE loop.
	echo '</table>';
}
else
{
	$q = "SELECT MEET.Competition_Name, TEAM.Team_Name, TEAM_COMPETES_AT.Team_ID, TEAM_COMPETES_AT.Meet_ID 
	FROM (MEET INNER JOIN TEAM_COMPETES_AT ON MEET.ID=TEAM_COMPETES_AT.Meet_ID INNER JOIN TEAM ON TEAM_COMPETES_AT.Team_ID=TEAM.Team_ID)
	WHERE TEAM_COMPETES_AT.Team_ID=$team
	ORDER BY MEET.Date DESC";
	$r = @mysqli_query ($dbc, $q); // Run the query.
	echo '<center><h2>Teams Competing in this Competition</h2></center>
	<table>
	<thead>
		<th>Competition Name</th>
		<th>Team Name</th>
	</thead>
	';
	 
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<tr>
			<td>' . $row['Competition_Name'] . '</td>
			<td>' . $row['Team_Name'] .'</td>
		</tr>
		';
	} // End of WHILE loop.
	echo '</table>';
	echo'<br /><a href="public.php">Go Back to Upcoming Events</a>';
}

mysqli_free_result ($r);
mysqli_close($dbc);

include ('./includes/footer.html');
?>
