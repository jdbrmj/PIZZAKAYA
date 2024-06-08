<?php
 $data = file_get_contents("php://input");

 $items = json_decode($data, true);

$conn = new mysqli('localhost','root','','pizzakaya');

if($conn->connect_error){
    die('connection error');
}
else{
    $stmt = $conn->query("DELETE FROM items WHERE item_id = {$items['item_id']}");
}
$conn->close();
?>