<?php

$page_title = 'View Staff';
include ('./includesAdmin/adminHeader.html');
echo '<h1><center>Staff</center></h1>';

require ('./mysqli_connect.php');

// Number of records to show per page:
$display = 10;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(ID) FROM STAFF";
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
	case 'ssn':
		$order_by = 'SSN ASC';
		break;
	case 'fn':
		$order_by = 'Staff_F_Name ASC';
	  	break;
	case 'mn':
		$order_by = 'Staff_MI ASC';
		break;
	case 'ln':
		$order_by = 'Staff_L_Name ASC';
		break;
	case 'title':
		$order_by = 'Job_Title ASC';
		break;
	case 'wage':
		$order_by = 'Hourly_Wage ASC';
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
	case 'hphone':
		$order_by = 'Home_Phone ASC';
		break;
	case 'birth':
		$order_by = 'Date_of_Birth ASC';
		break;
	case 'id':
		$order_by = 'Staff_ID ASC';
		break;
	default:
		$order_by = 'Staff_F_Name ASC';
		$sort = 'fn';
		break;
}

// Define the query:
$q = "SELECT SSN, Staff_F_Name, Staff_MI, Staff_L_Name, Job_Title, Hourly_Wage, Street, City, State, Home_Phone, Date_of_Birth, Staff_ID
	FROM STAFF
	ORDER BY $order_by
	LIMIT $start, $display";
$r = @mysqli_query ($dbc, $q); // Run the query.

// Table header:
echo '<table>
<thead>
	<th><a href="admin_staff.php?sort=ssn">SSN</a></th>
	<th><a href="admin_staff.php?sort=fn">First Name</a></th>
	<th><a href="admin_staff.php?sort=mn">Midde Name</a></th>
	<th><a href="admin_staff.php?sort=ln">Last Name</a></th>
	<th><a href="admin_staff.php?sort=title">Job Title</a></th>
	<th><a href="admin_staff.php?sort=wage">Hourly Wage</a></th>
	<th><a href="admin_staff.php?sort=street">Street</a></th>
	<th><a href="admin_staff.php?sort=city">City</a></th>
	<th><a href="admin_staff.php?sort=state">State</a></th>
	<th><a href="admin_staff.php?sort=hphone">Phone</a></th>
	<th><a href="admin_staff.php?sort=birth">Date of Birth</a></th>
	<th><a href="admin_staff.php?sort=id">Staff ID</a></th>
</thead>
';

// Fetch and print all the records....
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	echo '<tr>
		<td>' . $row['SSN'] . '</td>
		<td>' . $row['Staff_F_Name'] . '</td>
		<td>' . $row['Staff_MI'] . '</td>
		<td>' . $row['Staff_L_Name'] . '</td>
		<td>' . $row['Job_Title'] . '</td>
		<td>' . $row['Hourly_Wage'] . '</td>
		<td>' . $row['Street'] . '</td>
		<td>' . $row['City'] . '</td>
		<td>' . $row['State'] . '</td>
		<td>' . $row['Home_Phone'] . '</td>
		<td>' . $row['Date_of_Birth'] . '</td>
		<td>' . $row['Staff_ID'] . '</td>
		<td><a href="edit_staff.php?ID=' . $row['ID'] . '">Edit</a></td>
		<td><a href="delete_staff.php?ID=' . $row['ID'] . '">Delete</a></td>
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
		echo '<a href="admin_staff.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}

	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="admin_staff.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.

	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="admin_staff.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}

	echo '</p>'; // Close the paragraph.

} // End of links section.

include ('./includesAdmin/adminFooter.html');
?>
