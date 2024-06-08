<?php

   class User{
    public $user_id;
    public $user_registered;
    public function __construct($email,$password){
         $conn = new mysqli('localhost','root','','pizzakaya');
 
         if($conn->connect_error){
            die("connection error");
         }
         else{
            $stmt = $conn->prepare("SELECT user_id FROM user WHERE email = ? and password = ?");
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();

            $result = $stmt->get_result();
             if ($result->num_rows > 0){
                $this->user_registered = true;
                $data = $result->fetch_assoc();
                $this->user_id = $data['user_id'];
             }
         }
         $conn->close();
     }
 }
 if (!empty($_POST)){
 
     session_start();
     $user = new User($_POST['email'],$_POST['password']);
   
         if($user->user_registered){
            $_SESSION['user_id'] = "$user->user_id";
            header('location: ../index.php');
         }
         else{
            $_SESSION['user_id'] = '?)*@{}:)(@';
          header('location: ../pages/login.php');
          
         }
        
 

 
 }
  
?>