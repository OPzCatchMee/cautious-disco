<?php # edit_team.php
// This page is for editing a team record.
// This page is accessed through admin_team.php.

$page_title = 'Edit a Team';
include ('includes/header.html');
echo '<h1>Edit a Team</h1>';

// Check for a valid team id, through GET or POST:
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
    $id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission.
    $id = $_POST['id'];
} else { // No valid id, kill the script.
    echo '<p class="error">This page has been accessed in error.</p>';
    include ('includes/footer.html');
    exit();
}

require ('mysqli_connect.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = array();

    // Check for a location name:
    if (!isset($_POST['Team_Name'])) {
        $errors[] = 'You forgot to enter the team name.';
    } else {
        $tn = mysqli_real_escape_string($dbc, trim($_POST['Team_Name']));
    }

    // Check for a street:
    if (!isset($_POST['Street'])) {
        $errors[] = 'You forgot to enter your street.';
    } else {
        $street = mysqli_real_escape_string($dbc, trim($_POST['Street']));
    }

    // Check for a city:
    if (!isset($_POST['City'])) {
        $errors[] = 'You forgot to enter City.';
    } else {
        $city = mysqli_real_escape_string($dbc, trim($_POST['City']));
    }

    // Check for a State:
    if (!isset($_POST['State'])) {
        $errors[] = 'You forgot to enter state.';
    } else {
        $state = mysqli_real_escape_string($dbc, trim($_POST['State']));
    }

    // Check for a ZIP:
    if (!isset($_POST['ZIP'])) {
        $errors[] = 'You forgot to enter ZIP.';
    } else {
        $zip = mysqli_real_escape_string($dbc, trim($_POST['ZIP']));
    }


    if (empty($errors)) { // If everything's OK.

        //  Test for unique id:
        $q = "SELECT TEAM_ID FROM TEAM WHERE Team_Name='$name' AND Team_ID != $id";
        $r = @mysqli_query($dbc, $q);
        if (mysqli_num_rows($r) == 0) {

            // Make the query:
            $q = "UPDATE TEAM SET Team_Name='$tn', Street='$street', City='$city', State='$state', ZIP='$zip', Team_Name='$name' WHERE Team_ID=$id LIMIT 1";
            $r = @mysqli_query ($dbc, $q);
            if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

                // Print a message:
                echo '<p>The team has been edited.</p>';

            } else { // If it did not run OK.
                echo '<p class="error">The team could not be edited due to a system error. We apologize for any inconvenience.</p>'; // Public message.
                echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
            }

        } else { // Already registered.
            echo '<p class="error">The competition name has already been registered.</p>';
        }

    } else { // Report the errors.

        echo '<p class="error">The following error(s) occurred:<br />';
        foreach ($errors as $msg) { // Print each error.
            echo " - $msg<br />\n";
        }
        echo '</p><p>Please try again.</p>';

    } // End of if (empty($errors)) IF.

} // End of submit conditional.

// Always show the form...

// Retrieve the team's information:
$q = "SELECT Team_Name, Street, City, State, ZIP FROM TEAM WHERE Team_ID=$id";
$r = @mysqli_query ($dbc, $q);

if (mysqli_num_rows($r) == 1) { // Valid team id, show the form.

    // Get the team's information:
    $row = mysqli_fetch_array ($r, MYSQLI_NUM);

    // Create the form:
    echo '<form action="edit_team.php" method="post">
<p>Team Name: <input type="text" name="Team_Name" size="15" maxlength="15" value="' . $row[0] . '" /></p>
<p>Street: <input type="text" name="Street" size="15" maxlength="30" value="' . $row[1] . '" /></p>
<p>City: <input type="text" name="City" size="20" maxlength="60" value="' . $row[2] . '"  /> </p>
<p>State: <input type="text" name="State" size="15" maxlength="60" value="' . $row[3] . '"  /> </p>
<p>ZIP: <input type="text" name="ZIP" size="20" maxlength="60" value="' . $row[4] . '"  /> </p>

<p><input type="submit" name="submit" value="Submit" /></p>
<input type="hidden" name="id" value="' . $id . '" />
</form>';

} else { // Not a valid team id.
    echo '<p class="error">Error outputting table.</p>';
}

mysqli_close($dbc);

include ('includes/footer.html');
?>
