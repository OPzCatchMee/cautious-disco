<?php

$page_title = 'View the Events';
include ('./includesAdmin/adminHeader.html');
echo '<h1><center>Events</center></h1>';

require ('./mysqli_connect.php');

// Number of records to show per page:
$display = 10;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(ID) FROM EVENT";
	$r = @mysqli_query ($dbc, $q);
	$row = @mysqli_fetch_array ($r, MYSQLI_NUM);
	$records = $row[0];
	// Calculate the number of pages...
	if ($records > $display) { // More than 1 page.
		$pages = ceil ($records/$display);
	} else {
		$pages = 1;
	}
} // End of p IF.

// Determine where in the database to start returning results...
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
	$start = $_GET['s'];
} else {
	$start = 0;
}

// Determine the sort...
// Default is by registration date.
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'date';

// Determine the sorting order:
switch ($sort) {
	case 'id':
		$order_by = 'Competitor_ID ASC';
		break;
	case 'meet':
		$order_by = 'Meet_ID ASC';
		break;
	case 'event':
		$order_by = 'Event_Type ASC';
		break;
	case 'execScore':
		$order_by = 'Exec_Score ASC';
		break;
	case 'difScore':
		$order_by = 'Difficulty_Score ASC';
		break;
	case 'date':
		$order_by = 'Date ASC';
		break;
	case 'time':
		$order_by = 'Time ASC';
		break;
	default:
		$order_by = 'Date ASC';
		$sort = 'date';
		break;
}

// Define the query:
$q = "SELECT Competitor_ID, Meet_ID, Event_Type, Exec_Score, Difficulty_Score, DATE_FORMAT(Date, '%M %d, %Y') AS Date, TIME_FORMAT(Time, '%H:%i') AS Time
	FROM EVENT
	ORDER BY $order_by
	LIMIT $start, $display";
$r = @mysqli_query ($dbc, $q); // Run the query.

// Table header:
echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
<tr>
	<td align="left"><b><a href="admin_events.php?sort=ln">Competition</a></b></td>
	<td align="left"><b><a href="admin_events.php?sort=fn">Meet</a></b></td>
	<td align="left"><b><a href="admin_events.php?sort=rd">Event Type</a></b></td>
	<td align="left"><b><a href="admin_events.php?sort=rd">Execution Score</a></b></td>
	<td align="left"><b><a href="admin_events.php?sort=rd">Execution Difficulty</a></b></td>
	<td align="left"><b><a href="admin_events.php?sort=rd">Date</a></b></td>
	<td align="left"><b><a href="admin_events.php?sort=rd">Time</a></b></td>
</tr>
';

// Fetch and print all the records....
$bg = '#eeeeee';
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td align="left">' . $row['Competitor_ID'] . '</td>
    <td align="left">' . $row['Meet_ID'] . '</td>
		<td align="left">' . $row['Event_Type'] . '</td>
		<td align="left">' . $row['Exec_Score'] . '</td>
		<td align="left">' . $row['Difficulty_Score'] . '</td>
		<td align="left">' . $row['Date'] . '</td>
		<td align="left">' . $row['Time'] . '</td>
		<td align="left"><a href="edit_events.php?ID=' . $row['ID'] . '">Edit</a></td>
    <td align="left"><a href="delete_events.php?ID=' . $row['ID'] . '">Delete</a></td>
	</tr>
	';
} // End of WHILE loop.

echo '</table>';
mysqli_free_result ($r);
mysqli_close($dbc);

// Make the links to other pages, if necessary.
if ($pages > 1) {

	echo '<br /><p>';
	$current_page = ($start/$display) + 1;

	// If it's not the first page, make a Previous button:
	if ($current_page != 1) {
		echo '<a href="admin_events.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}

	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="admin_events.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.

	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="admin_events.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}

	echo '</p>'; // Close the paragraph.

} // End of links section.

include ('./includesAdmin/adminFooter.html');
?>
