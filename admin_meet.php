<?php

$page_title = 'View the Meets';
include ('includesAdmin/adminHeader.html');
echo '<h1><center>Meets</center></h1>';

require ('mysqli_connect.php');

// Number of records to show per page:
$display = 10;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(ID) FROM MEET";
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
	case 'ln':
		$order_by = 'Location_Name ASC';
		break;
	case 'street':
		$order_by = 'Street ASC';
		break;
	case 'city':
		$order_by = 'City ASC';
		break;
	case 'state':
		$order_by = 'State ASC';
		break;
	case 'zip':
		$order_by = 'ZIP ASC';
		break;
	case 'date':
		$order_by = 'Date ASC';
		break;
	case 'time':
		$order_by = 'Time ASC';
		break;
	case 'name':
		$order_by = 'Competition_Name ASC';
		break;
	default:
		$order_by = 'Date ASC';
		$sort = 'date';
		break;
}

// Define the query:
$q = "SELECT Location_Name, Street, City, State, ZIP, Date, Time, Competition_Name, ID
	FROM MEET
	ORDER BY $order_by
	LIMIT $start, $display";
$r = @mysqli_query ($dbc, $q); // Run the query.

// Table header:
echo '<table>
<thead>
	<th><a href="admin_meet.php?sort=ln">Location Name</a></th>
	<th><a href="admin_meet.php?sort=street">Street</a></th>
	<th><a href="admin_meet.php?sort=city">City</a></th>
	<th><a href="admin_meet.php?sort=state">State</a></th>
	<th><a href="admin_meet.php?sort=zip">ZIP</a></th>
	<th><a href="admin_meet.php?sort=date">Date</a></th>
	<th><a href="admin_meet.php?sort=time">Time</a></th>
	<th><a href="admin_meet.php?sort=name">Competition Name</a></th>
</thead>
';

// Fetch and print all the records....
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	echo '<tr>
		<td>' . $row['Location_Name'] . '</td>
		<td>' . $row['Street'] . '</td>
		<td>' . $row['City'] . '</td>
		<td>' . $row['State'] . '</td>
		<td>' . $row['ZIP'] . '</td>
		<td>' . $row['Date'] . '</td>
		<td>' . $row['Time'] . '</td>
		<td>' . $row['Competition_Name'] . '</td>
		<td><a href="edit_meet.php?id=' . $row['ID'] . '">Edit</a></td>
		<td><a href="delete_meet.php?id=' . $row['ID'] . '">Delete</a></td>
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
		echo '<a href="admin_meet.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}

	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="admin_meet.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.

	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="admin_meet.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}

	echo '</p>'; // Close the paragraph.

} // End of links section.
echo '<form action="create_meet.php">
    	<input type="submit" value="Create new Meet" />
		</form>';

include ('includesAdmin/adminFooter.html');
?>
