<?php

$page_title = 'View the Competitor';
include ('./includesAdmin/adminHeader.html');
echo '<h1><center>Competitor</center></h1>';

require ('./mysqli_connect.php');

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
  	$order_by = 'Competitor_F_Name ASC';
  	break;
  case 'mn':
  	$order_by = 'Competitor_MI ASC';
  	break;
	case 'ln':
		$order_by = 'Competitor_L_Name ASC';
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
		$order_by = 'Competitor_F_Name ASC';
		$sort = 'fn';
		break;
}

// Define the query:
$q = "SELECT Competitor_F_Name, Competitor_MI, Competitor_L_Name, Date_Of_Birth, Street, City, State, ZIP, Phone, Email, Level, Sex, Team_ID FROM COMPETITOR ORDER BY $order_by LIMIT $start, $display";
$r = @mysqli_query ($dbc, $q); // Run the query.

// Table header:
echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
<tr>
	<td align="left"><b><a href="admin_competitor.php.php?sort=fn">First Name</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=rd">Middle Name</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=rd">Last Name</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=rd">Date of Birth</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=rd">Street</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=rd">City</a></b></td>
  <td align="left"><b><a href="admin_competitor.php.php?sort=ln">State</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=fn">ZIP</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=rd">Phone</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=rd">Email</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=rd">Level</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=rd">Sex</a></b></td>
	<td align="left"><b><a href="admin_competitor.php.php?sort=rd">Team ID</a></b></td>
</tr>
';

// Fetch and print all the records....
$bg = '#eeeeee';
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td align="left">' . $row['Competitor_F_Name'] . '</td>
		<td align="left">' . $row['Competitor_MI'] . '</td>
		<td align="left">' . $row['Competitor_L_Name'] . '</td>
		<td align="left">' . $row['Date_Of_Birth'] . '</td>
		<td align="left">' . $row['Street'] . '</td>
		<td align="left">' . $row['City'] . '</td>
		<td align="left">' . $row['State'] . '</td>
		<td align="left">' . $row['ZIP'] . '</td>
		<td align="left">' . $row['Phone'] . '</td>
		<td align="left">' . $row['Email'] . '</td>
		<td align="left">' . $row['Level'] . '</td>
		<td align="left">' . $row['Sex'] . '</td>
		<td align="left">' . $row['Team_ID'] . '</td>
		<td align="left"><a href="edit_competitor.php?ID=' . $row['ID'] . '">Edit</a></td>
    <td align="left"><a href="delete_competitor.php?ID=' . $row['ID'] . '">Delete</a></td>
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

include ('./includesAdmin/adminFooter.html');
?>
