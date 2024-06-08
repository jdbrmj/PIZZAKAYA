<?php
 $data = file_get_contents("php://input");

 $items = json_decode($data, true);

 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $conn = new mysqli('localhost', 'root', '', 'pizzakaya');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        // Prepare and execute the SQL statement to insert data into the database
        $stmt = $conn->prepare('INSERT INTO items (item_name, price, quantity, img, user_id, pay_check) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('siisis', $items['item_name'], $items['price'], $items['quantity'], $items['img'], $items['user_id'], $items['paycheck']);
        $stmt->execute();
        $getId = $conn->query("SELECT item_id FROM items where user_id = {$items['user_id']}");
        $getId->data_seek($getId->num_rows-1);
        $result = $getId->fetch_assoc();

        echo $result['item_id'];
        $stmt->close();
        $conn->close();
    }
 }
?>