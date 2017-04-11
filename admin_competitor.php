<?php

$page_title = 'View the Competitor';
include ('includesAdmin/adminHeader.html');
echo '<h1><center>Competitor</center></h1>';

require ('mysqli_connect.php');

// Number of records to show per page:
$display = 10;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(ID) FROM COMPETITOR";
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
// Default is by first name.
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'fn';

// Determine the sorting order:
switch ($sort) {
	case 'fn':
	  	$order_by = 'First_Name ASC';
	  	break;
	case 'ln':
		$order_by = 'Last_Name ASC';
		break;
	case 'birth':
		$order_by = 'Date_Of_Birth ASC';
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
	case 'phone':
		$order_by = 'Phone ASC';
		break;
	case 'email':
		$order_by = 'Email ASC';
		break;
	case 'lvl':
		$order_by = 'Level ASC';
		break;
	case 'sex':
		$order_by = 'Sex ASC';
		break;
	case 'team_id':
		$order_by = 'Team_ID ASC';
		break;
	default:
		$order_by = 'First_Name ASC';
		$sort = 'fn';
		break;
}

// Define the query:
$q = "SELECT ID, First_Name, Last_Name, Email, Date_Of_Birth, Street, City, State, ZIP, Phone, Level, Sex, Team_ID
	FROM (LOGIN INNER JOIN COMPETITOR_ID ON LOGIN.ID_Login=COMPETITOR_ID.User INNER JOIN COMPETITOR ON COMPETITOR_ID.Competitor=COMPETITOR.ID)
	ORDER BY $order_by
	LIMIT $start, $display";
$r = @mysqli_query ($dbc, $q); // Run the query.

// for debugging
echo '<p>Number of results: '.mysqli_affected_rows($dbc).'</p>';

// Table header:
echo '<table>
<thead>
	<th><a href="admin_competitor.php?sort=fn">First Name</a></th>
	<th><a href="admin_competitor.php?sort=ln">Last Name</a></th>
	<th><a href="admin_competitor.php?sort=birth">Date of Birth</a></th>
	<th><a href="admin_competitor.php?sort=street">Street</a></th>
	<th><a href="admin_competitor.php?sort=city">City</a></th>
	<th><a href="admin_competitor.php?sort=state">State</a></th>
	<th><a href="admin_competitor.php?sort=zip">ZIP</a></th>
	<th><a href="admin_competitor.php?sort=phone">Phone</a></th>
	<th><a href="admin_competitor.php?sort=email">Email</a></th>
	<th><a href="admin_competitor.php?sort=lvl">Level</a></th>
	<th><a href="admin_competitor.php?sort=sex">Sex</a></th>
	<th><a href="admin_competitor.php?sort=team_id">Team ID</a></th>
</thead>
';

// Fetch and print all the records....
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	echo '<tr>
		<td>' . $row['First_Name'] . '</td>
		<td>' . $row['Last_Name'] . '</td>
		<td>' . $row['Date_Of_Birth'] . '</td>
		<td>' . $row['Street'] . '</td>
		<td>' . $row['City'] . '</td>
		<td>' . $row['State'] . '</td>
		<td>' . $row['ZIP'] . '</td>
		<td>' . $row['Phone'] . '</td>
		<td>' . $row['Email'] . '</td>
		<td>' . $row['Level'] . '</td>
		<td>' . $row['Sex'] . '</td>
		<td>' . $row['Team_ID'] . '</td>
		<td><a href="edit_competitor.php?id=' . $row['ID'] . '">Edit</a></td>
		<td><a href="delete_competitor.php?id=' . $row['ID'] . '">Delete</a></td>
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
		echo '<a href="admin_competitor.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}

	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="admin_competitor.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.

	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="admin_competitor.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}

	echo '</p>'; // Close the paragraph.

} // End of links section.

include ('includesAdmin/adminFooter.html');
?>
