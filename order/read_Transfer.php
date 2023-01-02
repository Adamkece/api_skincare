<?php
include '../connection.php';

// $_POST FUNGSI UNTUK MENAMBAHKAN PRODUK KE DATABASE
$currentOnlineUserID = $_POST["currentOnlineUserID"];

$sqlQuery = "SELECT * FROM orders_table WHERE user_id = '$currentOnlineUserID' AND status = 'Transfer' ORDER BY dateTime DESC";  

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0) 
{
    $orderRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $orderRecord[] = $rowFound;
    }
    echo json_encode(
        array(
            "success"=>true,
            "currentUserOrdersData"=>$orderRecord,
        )
    );
}
else 
{
    echo json_encode(array("success"=>false));
}