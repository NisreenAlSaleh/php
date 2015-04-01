<?php

 include 'D:\wamp\www\tender_project\modle\DBconnection.php';
 
 class contact1{
      public function __construct() {
          
        
     }
   public  function insert(){
       
            $connect=  new createConnection ();
  $connect->connectToDatabase();
  $insert=mysqli_query($connect->conn,"INSERT INTO contact(name,phone,email,subject_content)VALUES ('".$_POST['username']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['content']."')");
  echo$insert;
  if($insert){
      echo'Thank you for your time';
  }
  $connect->closeConnection();
     }
 }

?>
