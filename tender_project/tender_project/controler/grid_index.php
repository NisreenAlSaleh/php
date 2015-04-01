<?php
require_once('grid.php');

include_once'D:\wamp\www\tender_project\modle\user.php';
  $connect=  new createConnection ();
  $connect->connectToDatabase();
 $s="SELECT * FROM user_profile  ";
 $mydata=array(
 array('user_id'=>'',
 'user_name'=>'',
 'email'=>'',
 'f_name' => ' ',
 ));
 
$sql=mysqli_query($connect->conn,$s);



$i=0;
echo"<table border=1>";
$dd = new OPCDataGrid();
$dd->source($mydata);
$dd->fields(array(
' user_id'=>' user id'."<span>",
 'user_name' => 'user name ',
 'email ' => ' email',
 'f_name' => ' first name ',
 'f_name' => 'first name ',
 
));
$dd->render1();
$result=mysqli_fetch_array($sql);
while($row=  mysqli_fetch_array($sql)){
 
$data = array(
 array(
 'uid' =>$row['user_id'],
 'username' => $row['user_name'],
 'f_name' => $row['first_name'],
 'l_name' =>$row['last_name'],
 'email' => $row['user_email'],
 ),
 ); 
 

 $dg = new OPCDataGrid();
$dg->source($data);
$dg->fields(array(
'uid'=>' ',
 'username' => '  ',
 'email' => ' ',
'f_name' => ' ',
'f_name' => ' ',
 ));
 
$dg->render2();

} 



//$dg->addField('Full Name', 'full_name', '{f_name} {l_name}', array('before'=>'username'));


if(isset($_POST['delete'])){
include_once'D:\wamp\www\tender_project\controler\user_controler.php';
new user_controler();
user_controler::delete();
}

 
 
?>


