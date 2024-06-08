
<?php

$conn = new mysqli('localhost','root','','pizzakaya');

if ($conn->connect_error){
    die("connection error.");
}
else{
    $result = $conn->query("SELECT * FROM user WHERE user_id = {$_SESSION['user_id']}");
    $orders = $conn->query("SELECT COUNT(pay_check) as orders FROM items WHERE pay_check = 'NOTPAID' AND user_id = {$_SESSION['user_id']}");
    $user = $result->fetch_assoc();
    $user_orders = $orders->fetch_assoc();
        ?>
           <img src="../page-src/images/profile-icon.svg" alt="" height="150">
                   <p><span id="firstname">Firstname:</span><span class="user-profile"><?=$user['firstname']?></span></p>
                   <p><span id="lastname">Lastname:</span><span class="user-profile"><?=$user['lastname']?></span> </p>
                   <p><span id="email">Email:</span><span class="user-profile"><?=$user['email']?></span></p>
                   <p><span id="orders">Orders:</span><span class="user-profile"><?=$user_orders['orders']?></span></p>
        <?php
    $conn->close();
}
?>