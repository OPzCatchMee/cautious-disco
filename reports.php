<?php
//Displays all scores for a current month or year.  At the bottom, it displays Mean Min and Max of each score types. 
$page_title = 'Current Month Scores';
include ('includes/header.html');


require ('mysqli_connect.php');
//should probably change to post instead
$report = (isset($_GET['report'])) ? $_GET['report'] : 'month';
if($_GET['report']=='year')
{
	echo '<h1>Statistics for the Current Year</h1><br />';
        $q = "SELECT 
        AVG(Exec_Score) AS AVGEx, 
        MIN(Exec_Score) AS MINEx, 
        MAX(Exec_Score) AS MAXEx, 
        AVG(Diff_Score) AS AVGDif, 
        MIN(Diff_Score) AS MINDif, 
        MAX(Diff_Score) AS MAXDif
        FROM (EVENT INNER JOIN SCORES ON EVENT.Event_Id=SCORES.Event_ID)
        WHERE YEAR(Date) = YEAR(CURRENT_DATE())";
        $q2 = "SELECT Competitor_ID, Event_Type, Exec_Score, Diff_Score, DATE_FORMAT(Date, '%M %d, %Y') AS Date, TIME_FORMAT(Time, '%H:%i') AS Time
        FROM (EVENT INNER JOIN SCORES ON EVENT.Event_Id=SCORES.Event_ID)
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
			<td>' . $row['Diff_Score'] . '</td>
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
    echo '<p style="text-align:center"><a href="reports.php?report=month">View Monthly Report</a></p>';
}
else
{
	echo '<h1>Statistics for the Current Month</h1><br />';
    $q = "SELECT 
        AVG(Exec_Score) AS AVGEx, 
        MIN(Exec_Score) AS MINEx, 
        MAX(Exec_Score) AS MAXEx, 
        AVG(Diff_Score) AS AVGDif, 
        MIN(Diff_Score) AS MINDif, 
        MAX(Diff_Score) AS MAXDif
        FROM (EVENT INNER JOIN SCORES ON EVENT.Event_Id=SCORES.Event_ID)
        WHERE MONTH(Date) = MONTH(CURRENT_DATE()) && YEAR(Date) = YEAR(CURRENT_DATE())";
    $q2 = "SELECT Competitor_ID, Event_Type, Exec_Score, Diff_Score, DATE_FORMAT(Date, '%M %d, %Y') AS Date, TIME_FORMAT(Time, '%H:%i') AS Time
        FROM (EVENT INNER JOIN SCORES ON EVENT.Event_Id=SCORES.Event_ID)
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
			<td>' . $row['Diff_Score'] . '</td>
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
    echo '<p style="text-align:center"><a href="reports.php?report=year">View Yearly Report</a></p>';
}


mysqli_free_result ($r);
mysqli_close($dbc);

include ('includes/footer.html');
?>

