<?php
//Displays all scores for a current month or year.  At the bottom, it displays Mean Min and Max of each score types. 
$page_title = 'Current Month Scores';
include ('includes/header.html');
echo '<h1>Statistics for the Current Month</h1><br />';

require ('mysqli_connect.php');
//should probably change to post instead
$report = (isset($_GET['report'])) ? $_GET['report'] : 'month';
if($_GET['report']=='year')
{
        $q = "SELECT 
        AVG(Exec_Score) AS AVGEx, 
        MIN(Exec_Score) AS MINEx, 
        MAX(Exec_Score) AS MAXEx, 
        AVG(Difficulty_Score) AS AVGDif, 
        MIN(Difficulty_Score) AS MINDif, 
        MAX(Difficulty_Score) AS MAXDif
        FROM EVENT 
        WHERE YEAR(Date) = YEAR(CURRENT_DATE())";
        $q2 = "SELECT Competitor_ID, Event_Type, Exec_Score, Difficulty_Score,DATE_FORMAT(Date, '%M %d, %Y') AS Date, TIME_FORMAT(Time, '%H:%i') AS Time
        FROM EVENT
        WHERE YEAR(Date) = YEAR(CURRENT_DATE())
        ORDER BY Date ASC";

    $r = @mysqli_query ($dbc, $q2); // Run the query.
    echo '<table align="center">
	<thead>
		<th>Competitor ID</th>
		<th>Event Type</th>
		<th>Execution Score</th>
		<th>Difficulty Score</th>
		<th>Date</th>
		<th>Time</th>
	</thead>
	';

    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<tr>
			<td>' . $row['Competitor_ID'] . '</a></td>
			<td>' . $row['Event_Type'] . '</td>
			<td>' . $row['Exec_Score'] .'</td>
			<td>' . $row['Difficulty_Score'] . '</td>
			<td>' . $row['Date'] . '</td>
			<td>' . $row['Time'] . '</td>';
    }// End of WHILE loop.
    echo '</tr>';
    echo '</table>';


    mysqli_free_result ($r);
    $r = @mysqli_query ($dbc, $q); // Run the query.
    echo '<table align="center">
	<thead>
		<th>Average Execution Score</th>
		<th>Lowest Execution Score</th>
		<th>Highest Execution Score</th>
		<th>Average Difficulty Score</th>
		<th>Lowest Difficulty Score</th>
		<th>Highest Difficulty Score</th>
	</thead>
	';

    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<tr>
			<td>' . $row['AVGEx'] . '</a></td>
			<td>' . $row['MINEx'] . '</td>
			<td>' . $row['MAXEx'] .'</td>
			<td>' . $row['AVGDif'] . '</a></td>
			<td>' . $row['MINDif'] . '</td>
			<td>' . $row['MAXDif'] .'</td>';
    }// End of WHILE loop.
    echo '</tr>';
    echo '</table>';
    echo '<form action="reports.php" method="get">
	<input type="submit" name="submit" value="View Monthly Report" />
	<input type="hidden" name="report" value="month" />
	</form>';
}
else
{
    $q = "SELECT 
        AVG(Exec_Score) AS AVGEx, 
        MIN(Exec_Score) AS MINEx, 
        MAX(Exec_Score) AS MAXEx, 
        AVG(Difficulty_Score) AS AVGDif, 
        MIN(Difficulty_Score) AS MINDif, 
        MAX(Difficulty_Score) AS MAXDif
        FROM EVENT 
        WHERE MONTH(Date) = MONTH(CURRENT_DATE()) && YEAR(Date) = YEAR(CURRENT_DATE())";
    $q2 = "SELECT Competitor_ID, Event_Type, Exec_Score, Difficulty_Score,DATE_FORMAT(Date, '%M %d, %Y') AS Date, TIME_FORMAT(Time, '%H:%i') AS Time
        FROM EVENT
        WHERE MONTH(Date) = MONTH(CURRENT_DATE()) && YEAR(Date) = YEAR(CURRENT_DATE())
        ORDER BY Date ASC"; // default is month

    $r = @mysqli_query ($dbc, $q2); // Run the query.
    echo '<table align="center">
	<thead>
		<th>Competitor ID</th>
		<th>Event Type</th>
		<th>Execution Score</th>
		<th>Difficulty Score</th>
		<th>Date</th>
		<th>Time</th>
	</thead>
	';

    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<tr>
			<td>' . $row['Competitor_ID'] . '</a></td>
			<td>' . $row['Event_Type'] . '</td>
			<td>' . $row['Exec_Score'] .'</td>
			<td>' . $row['Difficulty_Score'] . '</td>
			<td>' . $row['Date'] . '</td>
			<td>' . $row['Time'] . '</td>';
    }// End of WHILE loop.
    echo '</tr>';
    echo '</table>';


    mysqli_free_result ($r);
    $r = @mysqli_query ($dbc, $q); // Run the query.
    echo '<table align="center">
	<thead>
		<th>Average Execution Score</th>
		<th>Lowest Execution Score</th>
		<th>Highest Execution Score</th>
		<th>Average Difficulty Score</th>
		<th>Lowest Difficulty Score</th>
		<th>Highest Difficulty Score</th>
	</thead>
	';

    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<tr>
			<td>' . $row['AVGEx'] . '</a></td>
			<td>' . $row['MINEx'] . '</td>
			<td>' . $row['MAXEx'] .'</td>
			<td>' . $row['AVGDif'] . '</a></td>
			<td>' . $row['MINDif'] . '</td>
			<td>' . $row['MAXDif'] .'</td>';
    }// End of WHILE loop.
    echo '</tr>';
    echo '</table>';
    echo '<form action="reports.php" method="get">
	<input type="submit" name="submit" value="View Yearly Report" />
	<input type="hidden" name="report" value="year" />
	</form>';
}


mysqli_free_result ($r);
mysqli_close($dbc);

include ('includes/footer.html');
?>

