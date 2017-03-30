<?php #5
//Public's view of the page (what a person that is not logged in/logged in can see)

$page_title = 'View the Current Users';
include ('./includes/header.html');
echo '<h1>Our Upcoming Events!</h1><br />';

require ('./mysqli_connect.php');

$q = "SELECT ID,Location_Name, Street, City, State, ZIP, DATE_FORMAT(Date, '%M %d, %Y') AS Date, TIME_FORMAT(Time, '%H:%i')AS Time, Competition_Name 
FROM MEET
WHERE Date>=CURRENT_DATE()
ORDER BY Date DESC";		
$r = @mysqli_query ($dbc, $q); // Run the query.
echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
<tr>
	<td align="left"><b>Venue</b></td>
	<td align="left"><b>Location</b></td>
	<td align="left"><b>Competition Name</b></td>
	<td align="left"><b>Date</b></td>
	<td align="left"><b>Time</b></td>
</tr>
';
$bg = '#eeeeee'; 
$meetIDS = array();
$x=0;
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        $meetIDS[$x] = $row['ID'];//place id of each meet in an array
        $x++;//increment the array
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td align="left">' . $row['Location_Name'] . '</td>
		<td align="left">' . $row['Street'] .' ' . $row['City'] .' , ' . $row['State'] .' ' . $row['ZIP'] .'</td>
                 <!--add a link to another php page to view teams competing according to meet id -->
                <td align="left">' . $row['Competition_Name'] . '</td>
		<td align="left">' . $row['Date'] . '</td>
		<td align="left">' . $row['Time'] . '</td>

	</tr>
	';
} // End of WHILE loop.
echo '</table>';
mysqli_free_result ($r);
mysqli_close($dbc);

include ('./includes/footer.html');
?>