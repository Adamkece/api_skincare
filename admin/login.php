<?php
include '../connection.php';

// "POST" to send or save data to database
// "GET" to read data from database 

$adminEmail = $_POST ['admin_email'];
$adminPassword = $_POST ['admin_password'];
// $userPassword = $_POST ['user_password'];

$sqlQuery = "SELECT * FROM admins_table WHERE admin_email = '$adminEmail' AND admin_password = '$adminPassword'";

 $resultOfQuery = $connectNow -> query($sqlQuery);

 if($resultOfQuery->num_rows > 0) //Allow user to login
 {

    $adminRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $adminRecord[] = $rowFound;
        // $userRecord = $rowFound;
    }

    echo json_encode(
        array(
            "success" => true,
            "userData" => $adminRecord[0],
        ));
 }
 else{
    echo json_encode(array("success" => false));
 }