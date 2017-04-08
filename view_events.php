<?php
// Page to view events, filterable by competitor and meet

$page_title = 'View Events';
include ('includes/header.html');

require ('mysqli_connect.php');

$competitor_id = (isset($_GET['competitor'])) ? $_GET['competitor'] : 'none';
$meet_id = (isset($_GET['meet'])) ? $_GET['meet'] : 'none';

	$q = "SELECT Event_ID, Event_Type, Exec_Score, Difficulty_Score, DATE_FORMAT(Date, '%M %d, %Y') AS Date, TIME_FORMAT(Time, '%H:%i') AS Time";
	if ($competitor_id == 'none')
		$q .= ", Competitor_ID";
	if ($meet_id == 'none')
		$q .= ", Meet_ID";
	$q .= " FROM EVENT";
	if ($competitor_id != 'none' && $meet_id != 'none')
		$q .= " WHERE Competitor_ID=$competitor_id AND Meet_ID=$meet_id";
	else if ($competitor_id != 'none')
		$q .= " WHERE Competitor_ID=$competitor_id";
	else if ($meet_id != 'none')
		$q .= " WHERE Meet_ID=$meet_id";
	$q .= " ORDER BY Date DESC";
	$r = @mysqli_query ($dbc, $q); // Run the query.
	echo '<table>
	<thead>';
		if ($competitor_id == 'none')
			echo '<th>Competitor</th>';
		if ($meet_id == 'none')
			echo '<th>Meet</th>';
		echo '<th>Event Type</td>
		<th>Execution Score</td>
		<th>Difficulty Score</td>
		<th>Date</td>
		<th>Time</td>
	</thead>
	';
	 
	$event_ids = array();
	$x=0;
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        $event_ids[$x] = $row['Event_ID']; // place id of each event in an array
		echo '<tr>';
			if ($competitor_id == 'none')
				echo '<td><a href="view_competitor.php?id=' . $row['Competitor_ID'] . '">' . $row['Competitor_ID'] . '</a></td>';
			if ($meet_id == 'none')
				echo '<td><a href="view_meet.php?id=' . $row['Meet_ID'] . '">' . $row['Meet_ID'] . '</a></td>';
			echo '<td>' . $row['Event_Type'] . '</td>
			<td>' . $row['Exec_Score'] .'</td>
	        <td>' . $row['Difficulty_Score'] . '</td>
			<td>' . $row['Date'] . '</td>
			<td>' . $row['Time'] . '</td>
		</tr>
		';
		$x++;//increment the array
	} // End of WHILE loop.
	echo '</table>';

mysqli_free_result ($r);
mysqli_close($dbc);

include ('includes/footer.html');
?>
