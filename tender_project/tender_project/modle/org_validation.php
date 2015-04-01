<?php

class validation{
    
function validate(){


$organizatoin_name=$organization_supportin_category=$email=$address=$organization_discription=$phone=$password=$rpassword="";
$ename=$ecategory=$eaddress=$eemail=$ediscription=$ephone=$epassword=$erpassword=$pass="";
 $var =0;
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 if (!empty($_POST["organizatoin_name"])) {
      $organizatoin_name = ($_POST["organizatoin_name"]);
     
     
   } else {
    $ename = "Name11111 is required";
    echo $ename;
	 $var=1;
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$organizatoin_name)) {
       $ename = "Only letters and white space allowed";
     }
   }

    if (empty($_POST["organization_supportin_category"])) {
     $ecategory = "organization is required";
     $var=1;

   } else {
     $organization_supportin_category= ($_POST["organization_supportin_category"]);
     // check if e-mail address is well-formed
if (!preg_match("/^[a-zA-Z ]*$/",$organization_supportin_category)) {
       $ecategory= "Only letters and white space allowed"; }
     }

    if (empty($_POST["org_email"])) {
     $eemail = "email name is required";
	 $var=1;
   } else {
     $email= ($_POST["org_email"]);
     // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $eemail = "Invalid email format";
     }

     }
if (empty($_POST["org_address"])) {
     $eaddress = "address is required";
	 $var=1;
   } else {
     $address= ($_POST["org_address"]);
  

   }
 if (empty($_POST["organization_discription"])) {
     $ediscription = "discription is required";
	 $var=1;
   } else {
     $organization_discription = ($_POST["organization_discription"]);
     // check if e-mail address is well-formed
    if (!preg_match("/^[a-zA-Z ]*$/",$organization_discription)) {
       $ediscription= "Only letters and white space allowed"; }
   }
if (empty($_POST["org_phone"])) {
     $ephone = "phone is required";
	 $var=1;
   } else {
     $phone= ($_POST["org_phone"]);
  

   }

 
 if($var!=1){

     include 'D:\wamp\www\tender_project\modle\organization.php';
     new organization();
     organization::check_db();
 }
	}
	}
 




function valid_pass($candidate) {
    $matches=" ";
    if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $candidate,$matches))
        return FALSE;
        return TRUE;
}

}

?>
