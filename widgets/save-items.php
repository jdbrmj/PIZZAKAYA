<?php
 $conn = new mysqli('localhost','root','','pizzakaya');
 $cart_items = array();
 if($conn->connect_error){
    die('connection error');
 }
 else{
    $stmt = $conn->query("SELECT *, (price * quantity) AS total_amount FROM items WHERE user_id = '{$_SESSION['user_id']}' AND pay_check = 'NOTPAID' ");
    $getTotal = $conn->query("SELECT SUM(price * quantity) AS total FROM items WHERE user_id = '{$_SESSION['user_id']}' AND pay_check = 'NOTPAID' ");
    $value = $getTotal->fetch_assoc();                          
    if($stmt->num_rows > 0){
        while($data = $stmt->fetch_assoc()){
       
              array_push($cart_items,array($data['img'],$data['item_name'],$data['price'],$data['quantity'],$data['item_id'],$data['total_amount']));
        }
    }
   
 }
 $conn->close();
?>


