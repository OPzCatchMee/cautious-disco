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
	echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
	<thead>';
		if ($competitor_id == 'none')
			echo '<th align="left">Competitor</th>';
		if ($meet_id == 'none')
			echo '<th align="left">Meet</th>';
		echo '<th align="left">Event Type</td>
		<th align="left">Execution Score</td>
		<th align="left">Difficulty Score</td>
		<th align="left">Date</td>
		<th align="left">Time</td>
	</thead>
	';
	$bg = '#eeeeee'; 
	$event_ids = array();
	$x=0;
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        $event_ids[$x] = $row['Event_ID']; // place id of each event in an array
		$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">';
			if ($competitor_id == 'none')
				echo '<td align="left"><a href="view_competitor.php?id=' . $row['Competitor_ID'] . '">' . $row['Competitor_ID'] . '</a></td>';
			if ($meet_id == 'none')
				echo '<td align="left"><a href="view_meet.php?id=' . $row['Meet_ID'] . '">' . $row['Meet_ID'] . '</a></td>';
			echo '<td align="left">' . $row['Event_Type'] . '</td>
			<td align="left">' . $row['Exec_Score'] .'</td>
	        <td align="left">' . $row['Difficulty_Score'] . '</td>
			<td align="left">' . $row['Date'] . '</td>
			<td align="left">' . $row['Time'] . '</td>
		</tr>
		';
		$x++;//increment the array
	} // End of WHILE loop.
	echo '</table>';

mysqli_free_result ($r);
mysqli_close($dbc);

include ('includes/footer.html');
?>
