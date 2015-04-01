



<?php
class validation{
function valide(){

$username=$firstname=$lastname=$email=$phone=$gender=$password=$rpassword="";
$eusername=$efirstname=$elastname=$eemail=$ephone=$epassword=$erpassword=$pass=$genderErr="";
 $var =0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 if (empty($_POST["username"])) {
     $eusername = "Name is required";
     echo $eusername;
	 $var=1;
   } else {
     $username = ($_POST["username"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
       $eusername = "Only letters and white space allowed";
     }
   }

    if (empty($_POST["firstname"])) {
     $efirstname = "firstname is required";$var=1;

   } else {
     $firstname= ($_POST["firstname"]);
     // check if e-mail address is well-formed
if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
       $efirstname= "Only letters and white space allowed"; }
     }

    if (empty($_POST["lastname"])) {
     $elastname = "last name is required";
	 $var=1;
   } else {
     $lastname= ($_POST["lastname"]);
     // check if e-mail address is well-formed
if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
       $elastname= "Only letters and white space allowed"; }
     }

 if (empty($_POST["email"])) {
     $eemail = "Email is required";
	 $var=1;
   } else {
     $email = ($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $eemail = "Invalid email format";
       $var=1;
     }
   }
if (empty($_POST["phone"])) {
     $ephone = "phone is required";
	 $var=1;
   } else {
     $phone= ($_POST["phone"]);
     // check if e-mail address is well-formed

   }
if (empty($_POST["gender"])) {
   $genderErr   = "gender is required";
	 $var=1;
   } else {
     $gender= ($_POST["gender"]);
     // check if e-mail address is well-formed

   }


if (empty($_POST["password"])) {
     $epassword= "password is required";
	 $var=1;
   } else {
     $password = ($_POST["password"]);
     // check if e-mail address is well-formed
     if (!validation::valid_pass($password)){
       $epassword = "Invalid passwordformat";
	   $var=1;}
   
     else{
   if (empty($_POST["r_password"])) {
   $erpassword= "is required" ;
   $var=1;
   }
   else {

     $rpassword= ($_POST['r_password']);

if($rpassword!=$password){$pass="Not maching" ;$var=1;}
 
 if($var!=1){
    
    include'D:\wamp\www\tender_project\modle\user.php';
     new user();
     user::check_db();
 }
	}
	}
 
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
