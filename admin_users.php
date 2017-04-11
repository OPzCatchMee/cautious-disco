<?php

$page_title = 'View the Current Users';
include ('includesAdmin/adminHeader.html');
echo '<h1><center>Registered Users</center></h1>';

require ('mysqli_connect.php');

// Number of records to show per page:
$display = 10;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(ID_Login) FROM Login";
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
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'rd';

// Determine the sorting order:
switch ($sort) {
	case 'ln':
		$order_by = 'Last_Name ASC';
		break;
	case 'fn':
		$order_by = 'First_Name ASC';
		break;
	case 'rd':
		$order_by = 'Registration_Date ASC';
		break;
	default:
		$order_by = 'Registration_Date ASC'; // default $sort = 'rd' if GET['sort'] not set
		break;
}

// Define the query:
$q = "SELECT Last_Name, First_Name, DATE_FORMAT(Registration_Date, '%M %d, %Y') AS dr, ID_Login
	FROM LOGIN
	ORDER BY $order_by
	LIMIT $start, $display";
$r = @mysqli_query ($dbc, $q); // Run the query.

// Table header:
echo '<table>
<thead>
	<th><a href="admin_users.php?sort=ln">Last Name</a></th>
	<th><a href="admin_users.php?sort=fn">First Name</a></th>
	<th><a href="admin_users.php?sort=rd">Date Registered</a></th>
</thead>
';

// Fetch and print all the records....
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	echo '<tr>
		<td>' . $row['Last_Name'] . '</td>
		<td>' . $row['First_Name'] . '</td>
		<td>' . $row['dr'] . '</td>
		<td><a href="edit_user.php?id=' . $row['ID_Login'] . '">Edit</a></td>
		<td><a href="delete_user.php?id=' . $row['ID_Login'] . '">Delete</a></td>
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
		echo '<a href="admin_users.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}

	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="admin_users.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.

	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="admin_users.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}

	echo '</p>'; // Close the paragraph.

} // End of links section.

include ('includesAdmin/adminFooter.html');
?>
