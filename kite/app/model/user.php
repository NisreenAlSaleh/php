<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author BATTAH
 */

 include "app".DS."model".DS."DBConnection.class1.php";
 
class user {
   
    var $username,$password,$email,$phone,$firstname,$lastname;
     public function __construct() {
        
     }
        function main(){
        echo"this is the main";
    }
     function  insert(){
       echo 'hello this is insertion';
       /*
       $connect=  new createConnection ();
         $connect->connectToDatabase();
         echo 'hello this is insertion';
         $s= $_POST['username'];
     $sql=mysqli_query($connect->conn,"INSERT INTO user_profile(user_name,user_password,user_phone,user_email,first_name,last_name) VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['firstname']."','".$_POST['lastname']."')");
if($sql){
    echo 'insertion succses';
}
*/
     }
 function retrive(){
     $sql = "SELECT * FROM tender_project";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["user_name"];
    }
} else {
    echo "0 results";
}
 }
}
 


?>
