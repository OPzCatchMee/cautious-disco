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
echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
<tr>
	<td align="left"><b><a href="admin_staff.php?sort=ssn">SSN</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=fn">First Name</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=mn">Midde Name</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=ln">Last Name</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=title">Job Title</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=wage">Hourly Wage</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=street">Street</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=city">City</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=state">State</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=hphone">Phone</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=birth">Date of Birth</a></b></td>
	<td align="left"><b><a href="admin_staff.php?sort=id">Staff ID</a></b></td>
</tr>
';

// Fetch and print all the records....
$bg = '#eeeeee';
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td align="left">' . $row['SSN'] . '</td>
		<td align="left">' . $row['Staff_F_Name'] . '</td>
		<td align="left">' . $row['Staff_MI'] . '</td>
		<td align="left">' . $row['Staff_L_Name'] . '</td>
		<td align="left">' . $row['Job_Title'] . '</td>
		<td align="left">' . $row['Hourly_Wage'] . '</td>
		<td align="left">' . $row['Street'] . '</td>
		<td align="left">' . $row['City'] . '</td>
		<td align="left">' . $row['State'] . '</td>
		<td align="left">' . $row['Home_Phone'] . '</td>
		<td align="left">' . $row['Date_of_Birth'] . '</td>
		<td align="left">' . $row['Staff_ID'] . '</td>
		<td align="left"><a href="edit_staff.php?ID=' . $row['ID'] . '">Edit</a></td>
	<td align="left"><a href="delete_staff.php?ID=' . $row['ID'] . '">Delete</a></td>
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
