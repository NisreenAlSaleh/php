<?php
 include 'D:\wamp\www\tender_project\modle\DBconnection.php';
class login{
 public   function __construct(){
        
    }
    function valide(){
             $connect=  new createConnection ();
  $connect->connectToDatabase();
  $username=$_POST['username'];
  $password=$_POST['password'];
  $s="SELECT user_name,user_password FROM user_profile WHERE user_name='$username' AND user_password='$password'";
 //  $s2="SELECT org_name,password FROM org_table WHERE org_name='$username' AND password='$password'";
  $query=  mysqli_query($connect->conn,$s);
 // $query=  mysqli_query($connect->conn,$s2);
  $user="SELECT user_name FROM user_profile WHERE user_name='$username'";
  $pass="SELECT user_password FROM user_profile WHERE user_password='$password'AND username='$user'";
  
  if($pass==$password){
     echo 'haoooo user';
  }
  else{
      echo'you need to regester first';
  }
    }
}
?>
