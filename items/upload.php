<?php
include '../connection.php';

$itemName = $_POST ['name'];
$itemRating = $_POST ['rating'];
$itemTags = $_POST ['tags'];
$itemPrice = $_POST ['price'];
$itemVarian = $_POST ['varian'];
$itemSize = $_POST ['sizes'];
$itemDescription = $_POST ['description'];
$itemImage = $_POST ['image'];

$sqlQuery = "INSERT INTO items_tb SET name='$itemName', rating='$itemRating', tags='$itemTags', price='$itemPrice', varian='$itemVarian', sizes='$itemSize', description='$itemDescription', image ='$itemImage'";

$resultOfQuery = $connectNow -> query($sqlQuery);


if($resultOfQuery ){
    echo json_encode(array("success" => true));
 }
 else{
    echo json_encode(array("success" => false));
 }

// <?php
// include '../connection.php';

// $itemName = $_POST ['name'];
// $itemRating = $_POST ['rating'];
// $itemTags = $_POST ['tags'];
// $itemPrice = $_POST ['price'];
// $itemVarian = $_POST ['varian'];
// $itemSize = $_POST ['sizes'];
// $itemDescription = $_POST ['description'];
// $itemImage = $_POST ['image'];

// $sqlQuery = "INSERT INTO items_tb SET name='$itemName', rating='$itemRating', tags='$itemTags', price='$itemPrice', varian='$itemVarian', sizes='$itemSize', description='$itemDescription', image ='$itemImage'";

// $resultOfQuery = $connectNow -> query($sqlQuery);


// if($resultOfQuery ){
//     echo json_encode(array("success" => true));
//  }
//  else{
//     echo json_encode(array("success" => false));
//  }