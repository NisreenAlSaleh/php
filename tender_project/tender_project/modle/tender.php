<?php

 include 'DBconnection.php';
class tender {
   
 
         
         
         
    var $tender_name,$org_trade_mark,$start_date,$end_date,$invelope_hand_over,$invelope_opining,$tender_region,$tender_content;
     public function __construct() {
          
        
     }
     function  insert(){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  
 $org_name=$_POST['org_name'];
        
         $org_id="SELECT org_id FROM org_table WHERE org_name='$org_name'";
         
         
         $sql2=  mysqli_query($connect2->conn, $org_id);
        $g=  mysqli_fetch_array($sql2);
        
     $insert=   "INSERT INTO tender(org_id,tender_name,org_trade_mark,start_date,end_date,invelope_hand_over,invelope_opining,tender_region,tender_content)
 VALUES ('".$g[0]."','".$_POST['tender_name']."','".$_POST['org_trade_mark']."','".$_POST['start_date']."','".$_POST['end_date']."','".$_POST['invelope_hand_over']."','".$_POST['invelope_opining']."','".$_POST['tender_region']."','".$_POST['tender_content']."')";
    
 $sql3=mysqli_query($connect2->conn,$insert);
 

 if($sql3){
    echo 'insertion succses';
}
else{
    echo'process not complete';
}

     }
 function retrive($username=''){

   $connect2=  new createConnection ();
  $connect2->connectToDatabase();

     $sql = "SELECT * FROM tender WHERE tender_name='$username'";
$result = mysqli_query($connect2->conn,$sql);


if ( $result->num_rows > 0)
    {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["tender_id"]."</br>"."Name: " . $row["tender_name"]."</br>";
           }
    }
else {
    echo "0 results";
     }
     $connect2->closeConnection();
 }
 
  
 function  check_db(){
     
     $connect3=  new createConnection ();
  $connect3->connectToDatabase();
  $tender_name=$_POST['tender_name'];
 $org_trade_mark=$_POST['org_trade_mark'];
  
$q= "SELECT tender_name,org_trade_mark FROM tender WHERE tender_name='$tender_name' AND org_trade_mark='$org_trade_mark' ";

     $sql2=mysqli_query($connect3->conn,$q);
  $result=  mysqli_fetch_array($sql2);
  
    if($result[0] ){
        echo 'you are already regesterd';
       
        
    }
    else{
      
      tender:: insert();
    }
 }
  function delete($username){
  $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 
  $sql="DELETE FROM tender WHERE tender_name='$username'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      echo $username.'is DELETED';
  }
  }
  function update($username){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
   
  $sql="SELECT tender_name,org_trade_mark,start_date,end_date,invelope_hand_over,invelope_opining,tender_region,tender_content 
  FROM tender WHERE tender_name='$username'";

  $select=  mysqli_query($connect2->conn, $sql);
  if($select){
      echo"<table border=1>
<tr>
<th>Tender name</th>
<th>org.trade Mark</th>
<th>start date</th>
<th>end date</th>
<th>envelope hand over</th>
<th>evelope opining</th>
<th>Tender ragion</th>
<th>Tender content</th>
</tr>";
      

      while($row=mysqli_fetch_array($select)){
 ?>
        <form action="<?php echo($_SERVER["PHP_SELF"]);?>"method="post">;
<?php  
          echo"<tr>";
          echo"<td>"."<input type='text' name='tender_name'>".$row['tender_name']."</td>";
          echo"<td>"."<input type='text' name='org_trade_mark'>".$row['org_trade_mark']."</td>";
          echo"<td>"."<input type='text' name='start_date'>".$row['start_date']."</td>";
          echo"<td>"."<input type='text' name='end_date'>".$row['end_date']."</td>";
          echo"<td>"."<input type='text' name='invelope_hand_over'>".$row['invelope_hand_over']."</td>";
          echo"<td>"."<input type='text' name='ivelope_opining'>".$row['invelope_opining']."</td>";
          echo"<td>"."<input type='text' name='tender_region'>".$row['tender_region']."</td>";
          echo"<td>"."<input type='text' name='tender_content'>".$row['tender_content']."</td>"."</br>";
          
          echo"</tr>";
          echo"<td>" ."</td><td><input type='submit'  value='update'>". "</td>";
          echo"</form>";
          
          
      }
      
   echo"</table>";
   

  }
   
         if (isset($_POST['update'])) {
              $tender_name=$_POST['tender_name'];
      $org_trade_mark=$_POST['org_trade_mark'];
      $start_date=$_POST['start_date'];
       $end_date=$_POST['end_date'];
       $invelope_hand_over=$_POST['invelope_hand_over'];
       $invelope_opining=$_POST['ivelope_opining'];
       $tender_region=$_POST['tender_region'];
       $tender_content=$_POST['tender_content'];
   
      $sql2="UPDATE tender SET tender_name='$tender_name',org_trade_mark='$org_trade_mark',start_date='$start_date',
      end_date='$end_date',invelope_hand_over='$invelope_hand_over',invelope_opining='$invelope_opining',
      tender_region='$tender_region',tender_content='$tender_content'";
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