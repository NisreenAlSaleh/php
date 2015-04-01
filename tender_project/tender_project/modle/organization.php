<?php

 include 'DBconnection.php';
class organization {
   
 
         
         
         
    var $organization_name,$address,$email,$phone,$organization_description,$password,$organization_supportin_category;
     public function __construct() {
          
        
     }
     function  insert(){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  
 
         echo 'hallo this is insertion';
        
     $sql3=mysqli_query($connect2->conn,"INSERT INTO org_table(org_name,address,email,phone,org_disc,org_supp_cat)VALUES ('".$_POST['organizatoin_name']."','".$_POST['org_address']."','".$_POST['org_email']."','".$_POST['org_phone']."','".$_POST['organization_discription']."','".$_POST['organization_supportin_category']."')");
if($sql3){
    echo 'insertion succses';
}

     }
 function retrive($username=''){

   $connect2=  new createConnection ();
  $connect2->connectToDatabase();

     $sql = "SELECT * FROM org_table WHERE org_name='$username'";
$result = mysqli_query($connect2->conn,$sql);


if ( $result->num_rows >0)
    {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["org_id"]." </br>"."Organization Name: ".$row['org_name']."</br>"."Organization Phone :".$row['phone']."</br>"."email :".$row['email']."</br>";
           }
    }
else {
    echo "0 results";
     }
     $connect2->closeConnection();
 }
 
  
 function  check_db(){
     $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  $username=$_POST['organizatoin_name'];
  $email=$_POST['org_email'];
  
$q= "SELECT org_name,email FROM org_table WHERE org_name='$username' AND email='$email'";
     $sql2=mysqli_query($connect2->conn,$q);
  $result=  mysqli_fetch_array($sql2);
   
    if($result[0]&&$result[1] ){
        echo 'you are already regesterd';
        
        
    }
    else{
      
      organization:: insert();
    }
 }
 function delete($username){
  $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 
  $sql="DELETE FROM org_table WHERE org_name='$username'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      echo $username.'is DELETED';
  }
 }
 
 
 
 
 
   function update($username){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
   
  $sql="SELECT org_name,address,email,phone,org_disc,org_supp_cat 
  FROM org_table WHERE org_name='$username'";

  $select=  mysqli_query($connect2->conn, $sql);
  if($select){
      echo"<table border=1>
<tr>
<th>Org name</th>
<th>Org address</th>
<th>Org email</th>
<th>Org phone</th>
<th>Org supporting category</th>
<th>Org discription</th>


</tr>";
      

      while($row=mysqli_fetch_array($select)){
 ?>
        <form action="<?php echo($_SERVER["PHP_SELF"]);?>"method="post">;
<?php  
          echo"<tr>";
          echo"<td>"."<input type='text' name='org_name'>".$row['org_name']."</td>";
           echo"<td>"."<input type='text' name='address'>".$row['address']."</td>";
          echo"<td>"."<input type='text' name='email'>".$row['email']."</td>";
          echo"<td>"."<input type='text' name='phone'>".$row['phone']."</td>";
          echo"<td>"."<input type='text' name='org_supp_cat'>".$row['org_supp_cat']."</td>";
          echo"<td>"."<input type='text' name='org_disc'>".$row['org_disc']."</td>";
          
        
          
          echo"</tr>";
          echo"<td>" ."</td><td><input type='submit'  value='update'>". "</td>";
          echo"</form>";
          
          
      }
      
   echo"</table>";
   

  }
   
         if (isset($_POST['update'])) {
             
              $org_name=$_POST['org_name'];
              $address=$_POST['address'];
              $phone=$_POST['phone'];
      $email=$_POST['email'];
       $org_supp_cat=$_POST['org_supp_cat'];
       $org_disc=$_POST['org_disc'];
      
   
      $sql2="UPDATE org_table SET org_name='$org_name',address='$address',phone='$phone',email='$email',
      org_supp_cat='$org_supp_cat',org_disc='$org_disc' WHERE org_name='$org_name'";
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