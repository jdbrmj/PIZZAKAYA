<?php
$data = file_get_contents("php://input");

$items = json_decode($data, true);
$conn = new mysqli('localhost','root','','pizzakaya');

if ($conn->connect_error){
die('Connection Error');
}
else{
    $payCheckUpdate = $conn->query("UPDATE items SET pay_check = 'PAID' WHERE user_id = '{$items['user_id']}' ");
}
$conn->close();
?>