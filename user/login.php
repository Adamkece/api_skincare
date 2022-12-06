<?php
include '../connection.php';

// "POST" to send or save data to database
// "GET" to read data from database 
$userEmail = $_POST ['user_email'];
$userPassword = md5($_POST ['user_password']);
// $userPassword = $_POST ['user_password'];

$sqlQuery = "SELECT * FROM user_tb WHERE user_email = '$userEmail' AND user_password = '$userPassword'";

 $resultOfQuery = $connectNow -> query($sqlQuery);

 if($resultOfQuery->num_rows > 0) //Allow user to login
 {
    $userRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $userRecord[] = $rowFound;
        // $userRecord = $rowFound;
    }

    echo json_encode(
        array(
            "success" => true,
            "userData" => $userRecord[0],
        ));
 }
 else{
    echo json_encode(array("success" => false));
 }