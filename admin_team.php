<?php

$page_title = 'View the Teams';
include ('includesAdmin/adminHeader.html');
echo '<h1><center>Teams</center></h1>';

require ('mysqli_connect.php');

// Number of records to show per page:
$display = 10;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
    $pages = $_GET['p'];
} else { // Need to determine.
    // Count the number of records:
    $q = "SELECT COUNT(Team_ID) FROM TEAM";
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
// Default is by team name
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'team_name';

// Determine the sorting order:
switch ($sort) {
    case 'tn':
        $order_by = 'Team_Name ASC';
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
    default:
        $order_by = 'Team_Name ASC';
        $sort = 'team_name';
        break;
}

// Define the query:
$q = "SELECT Team_ID,Team_Name, Street, City, State, ZIP
	FROM TEAM
	ORDER BY $order_by
	LIMIT $start, $display";
$r = @mysqli_query ($dbc, $q); // Run the query.

// Table header:
echo '<table>
<thead>
	<th><a href="admin_team.php?sort=tn">Team Name</a></th>
	<th><a href="admin_team.php?sort=street">Street</a></th>
	<th><a href="admin_team.php?sort=city">City</a></th>
	<th><a href="admin_team.php?sort=state">State</a></th>
	<th><a href="admin_team.php?sort=zip">ZIP</a></th>

</thead>
';

// Fetch and print all the records....
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    echo '<tr>
		<td>' . $row['Team_Name'] . '</td>
		<td>' . $row['Street'] . '</td>
		<td>' . $row['City'] . '</td>
		<td>' . $row['State'] . '</td>
		<td>' . $row['ZIP'] . '</td>
		<td><a href="edit_team.php?id=' . $row['Team_ID'] . '">Edit</a></td>
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
        echo '<a href="admin_team.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
    }

    // Make all the numbered pages:
    for ($i = 1; $i <= $pages; $i++) {
        if ($i != $current_page) {
            echo '<a href="admin_team.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
        } else {
            echo $i . ' ';
        }
    } // End of FOR loop.

    // If it's not the last page, make a Next button:
    if ($current_page != $pages) {
        echo '<a href="admin_team.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
    }

    echo '</p>'; // Close the paragraph.

} // End of links section.
echo '<form action="create_team.php">
    	<input type="submit" value="Create new Team" />
		</form>';

include ('includesAdmin/adminFooter.html');
?>
