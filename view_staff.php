<?php
//This will be how staff that are logged in view and edit their info

$page_title = 'Edit Information';
include ('includes/header.html');
echo '<h1>Edit Personal Information</h1>';


if ((isset($_SESSION['Staff_ID'])))//if logged in as Staff
{
    require ('mysqli_connect.php');

        $staff_ID = $_SESSION['Staff_ID'];
        $q = "SELECT a.Staff, a.User, b.ID_Login, b.Email, b.First_Name, b.Last_Name, DATE_FORMAT(b.Date_Of_Birth, '%M %d, %Y') AS DOB, 
b.Phone, b.Street, b.City, b.State, b.Zip
              FROM STAFF_ID as a, LOGIN as b
              WHERE a.Staff=$staff_ID && a.User=b.ID_Login && b.Deleted=0";
        $r = @mysqli_query ($dbc, $q);
        $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
        echo '<p>Email: '.$row['b.Email'].'</p>
              <p>First Name: '.$row['b.First_Name'].'</p>
              <p>Last Name: '.$row['b.Last_Name'].'</p>
              <p>DOB: '.$row['b.DOB'].'</p>
              <p>Phone: '.$row['b.Phone'].'</p>
              <p>Address: '.$row['b.Street'].' '.$row['b.City'].' '.$row['b.State'].' '.$row['b.ZIP'].'</p>';
        //free the result to start second query
        mysqli_free_result ($r);
        echo'<a href="edit_staff.php"> Edit info</a>';
}
else
{
    echo 'You are not logged in as a staff member or ID is not valid';
}
