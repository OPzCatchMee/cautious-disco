<?php
 //this page was meant to be used to edit the logged in user's information
$page_title = 'Edit Information';
include ('includes/header.html');
echo '<h1>Edit Personal Information</h1>';


if ((isset($_SESSION['Staff_ID'])))//if logged in as Staff
{
    require('mysqli_connect.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') //if post then modify
    {
        $errors = array();
        $staff_ID = 2;//$_SESSION['Staff_ID'];
        // Check for the email:
        if (!isset($_POST['Email'])) {
            $errors[] = 'You forgot to enter an email.';
        } else {
            $email = mysqli_real_escape_string($dbc, trim($_POST['Email']));
        }

        // Check for first name:
        if (!isset($_POST['First_Name'])) {
            $errors[] = 'You forgot to enter First Name.';
        } else {
            $first_name = mysqli_real_escape_string($dbc, trim($_POST['First_Name']));
        }

        // Check for last name:
        if (!isset($_POST['Last_Name'])) {
            $errors[] = 'You forgot to enter your Last Name.';
        } else {
            $last_name = mysqli_real_escape_string($dbc, trim($_POST['Last_Name']));
        }

        // Check for dob:
        if (!isset($_POST['DOB'])) {
            $errors[] = 'You forgot to enter your birthday.';
        } else {
            $dob = mysqli_real_escape_string($dbc, trim($_POST['DOB']));
        }

        // Check for phone:
        if (!isset($_POST['Phone'])) {
            $errors[] = 'You forgot to enter the phone.';
        } else {
            $phone = mysqli_real_escape_string($dbc, trim($_POST['Phone']));
        }
        // Check for email:
        if (!isset($_POST['Street'])) {
            $errors[] = 'You forgot to enter the email.';
        } else {
            $street = mysqli_real_escape_string($dbc, trim($_POST['Street']));
        }
        if (!isset($_POST['City'])) {
            $errors[] = 'You forgot to enter the email.';
        } else {
            $city = mysqli_real_escape_string($dbc, trim($_POST['City']));
        }
        if (!isset($_POST['ZIP'])) {
            $errors[] = 'You forgot to enter the postal code.';
        } else {
            $zip = mysqli_real_escape_string($dbc, trim($_POST['ZIP']));
        }

        if (empty($errors)) { // If everything's OK.

            //  Test for unique email address:
            $q = "SELECT LOGIN.ID_Login, STAFF_ID.Staff
			FROM (LOGIN INNER JOIN STAFF_ID ON LOGIN.Staff_ID=STAFF_ID.Staff)
			WHERE LOGIN.Email='$email' AND STAFF_ID.Staff != $staff_id";
            $r = @mysqli_query($dbc, $q);
            if (mysqli_num_rows($r) == 0) {
                $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
                $user_id = $row['ID_Login'];
                mysqli_free_result($r);

                // update LOGIN
                $q = "UPDATE LOGIN
				SET Email='$email', First_Name= '$first_name', Last_Name= '$last_name', Phone='$phone', Date_Of_Birth='$dob',Street='$street', City='$city', State='$state', ZIP='$zip', Phone='$phone'
				WHERE ID_Login=$user_id
				LIMIT 1";
                $r = @mysqli_query($dbc, $q);
                if (mysql_affected_rows($dbc) == 0 || mysqli_affected_rows($dbc) == 1) { // if no row updated, or only 1 row
                    // Print a message:
                    echo '<p>The user has been edited.</p>';

                } else { // If it did not run OK.
                    echo '<p class="error">The user could not be edited due to a system error. We apologize for any inconvenience.</p>'; // Public message.
                    if ($_SESSION['Is_Admin']) {
                        echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
                    }
                }

                mysqli_free_result($r);
            } else { // Already registered.
                echo '<p class="error">The email address has already been registered.</p>';
            }

        } else { // Report the errors.
            echo '<p class="error">The following error(s) occurred:<br />';
            foreach ($errors as $msg) { // Print each error.
                echo " - $msg<br />\n";
            }
            echo '</p><p>Please try again.</p>';
        }
    }
    else //display change form
    {


        $staff_ID = 2;//$_SESSION['Staff_ID'];
        $q = "SELECT a.Staff, a.User, b.ID_Login, b.Email, b.First_Name, b.Last_Name, DATE_FORMAT(b.Date_Of_Birth, '%M %d, %Y') AS DOB, 
        b.Phone, b.Street, b.City, b.State, b.ZIP
                      FROM STAFF_ID as a, LOGIN as b
                      WHERE a.Staff=$staff_ID && a.User=b.ID_Login && b.Deleted=0";

        $r = @mysqli_query($dbc, $q);
        $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
        echo '<form action="edit_staff.php" method="post">
            <p>Email: <input type="text" name="Email" size="15" maxlength="15" value="' . $row['Email'] . '" /></p>
            <p>First Name: <input type="text" name="First_Name" size="15" maxlength="15" value="' . $row['First_Name'] . '" /></p>
            <p>Last Name: <input type="text" name="Last_Name" size="15" maxlength="15" value="' . $row['Last_Name'] . '" /></p>
            <p>DOB (MM-DD-YYYY): <input type="text" name="DOB" size="15" maxlength="10" value="' . $row['DOB'] . '" /></p>
            <p>Phone: <input type="text" name="Phone" size="15" maxlength="15" value="' . $row['Phone'] . '" /></p>
            <p>Street: <input type="text" name="Street" size="15" maxlength="30" value="' . $row['Street'] . '" /></p>
            <p>City: <input type="text" name="City" size="20" maxlength="60" value="' . $row['City'] . '"  /> </p>
            <label for="State" id="state_label">State</label>
            <select name="State" id="state" required>
                <option selected="'.$row['State'].'" value="'.$row['State'].'">'.$row['State'].'</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">Dist of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
            <!--<p>State: <input type="text" name="State" size="15" maxlength="60" value="' . $row['State'] . '"  /> </p>-->
            <p>ZIP: <input type="text" name="ZIP" size="20" maxlength="60" value="' . $row['ZIP'] . '"  /> </p>
        
        <p><input type="submit" name="submit" value="Submit" /></p>
        <input type="hidden" name="id" value="' . $row['ID_Login'] . '" />
        </form>';
        mysqli_free_result ($r);
    }
}
//free the result to start second query

mysqli_close($dbc);

include ('includes/footer.html');
?>
