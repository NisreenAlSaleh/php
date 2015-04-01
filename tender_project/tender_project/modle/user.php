<?php

 include 'DBconnection.php';
class user {
   
 
         
         
         

     public function __construct() {
          
        
     }
     function  insert(){
      $connect=  new createConnection ();
  $connect->connectToDatabase();
 
      
        $org_name=$_POST['org_name'];
         
         $org_id="SELECT org_id FROM org_table WHERE org_name='$org_name'";
        
         
         $sql2=  mysqli_query($connect->conn, $org_id);
        $g=  mysqli_fetch_array($sql2);
        
        echo 'hallo this is insertion for the tender';
     $sql=mysqli_query($connect->conn,"INSERT INTO user_profile(user_name,user_password,user_phone,user_email,first_name,last_name,org_id)
         VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['firstname']."','".$_POST['lastname']."','".$g[0]."')");
if($sql){
    echo 'insertion succses';
}

     }
 function retrive($id=''){

   $connect=  new createConnection ();
  $connect->connectToDatabase();

     $sql = "SELECT * FROM user_profile WHERE user_name='$id'";
$query = mysqli_query($connect->conn,$sql);



if ( $query->num_rows >0)
    {
    
    // output data of each row
    while($row = $query->fetch_assoc()) {
        
        echo "User ID: " . $row["user_id"]."</br>". " User Nmae : " . $row["user_name"]. "  </br> "."  First Name:" . $row["first_name"]."</br> "."User Phone:".$row['user_phone']. "<br>";
    }
    }
else {
    echo "no match found";
     }
     $connect->closeConnection();
 }
 
  
 function  check_db(){
     $connect= new createConnection ();
  $connect->connectToDatabase();
  $username=$_POST['username'];
  $email=$_POST['email'];
  $q="SELECT user_name,user_email FROM user_profile WHERE user_name='$username' AND user_email='$email'";

    $sql2=mysqli_query($connect->conn,$q);
  
   
  $result=  mysqli_fetch_array($sql2);
     
    if($result[0] ){
        echo 'you are already regesterd';
        
        
    }
    else{
     
     user:: insert();
    }
    $connect->closeConnection();
   
 }
  function delete($username){
  $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 echo'dddddddddddd';
  $sql="DELETE FROM user_profile WHERE user_name='$username'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      echo $username.'is DELETED';
  }
  }

  
  
  
  function update($username){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
   
  $sql="SELECT user_name,user_phone,user_email,first_name,last_name 
  FROM user_profile WHERE user_name='$username'";

  $select=  mysqli_query($connect2->conn, $sql);
  if($select){
      echo"<table border=1>
<tr>
<th>User name</th>
<th>User phone</th>
<th>User email</th>
<th>first name</th>
<th>last name</th>

</tr>";
      

      while($row=mysqli_fetch_array($select)){
 ?>
        <form action="<?php echo($_SERVER["PHP_SELF"]);?>"method="post">;
<?php  
          echo"<tr>";
          echo"<td>"."<input type='text' name='user_name'>".$row['user_name']."</td>";
          echo"<td>"."<input type='text' name='user_phone'>".$row['user_phone']."</td>";
          echo"<td>"."<input type='text' name='user_email'>".$row['user_email']."</td>";
          echo"<td>"."<input type='text' name='first_name'>".$row['first_name']."</td>";
          echo"<td>"."<input type='text' name='last_name'>".$row['last_name']."</td>";
        
          
          echo"</tr>";
          echo"<td>" ."</td><td><input type='submit'  value='update'>". "</td>";
          echo"</form>";
          
          
      }
      
   echo"</table>";
   

  }
   
         if (isset($_POST['update'])) {
              $user_name=$_POST['user_name'];
      $user_phone=$_POST['user_phone'];
      $user_email=$_POST['user_email'];
       $first_name=$_POST['first_name'];
       $last_name=$_POST['last_name'];
      
   
      $sql2="UPDATE user_profile SET user_name='$user_name',user_phone='$user_phone',user_email='$user_email',
      first_name='$first_name',last_name='$last_name'";
      $update=mysqli_query($connect2->conn,$sql2);
      if($update){
          echo'table is updated';
      }
      else{
          echo'not updated';
      }
  }
  }
 }
 
 

