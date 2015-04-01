<?php

     $username=$phone=$email=$content='';
       $eusername=$ephone=$eemail=$econtent='';
       $var=0;
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if(empty($_POST['username'])){
               $eusername="please enter ur user name";
               $var=1;
           }
           else{
               $username=$_POST['username'];
           }
           if(empty($_POST['phone'])){
               $ephone="please enter ur user phone";
               $var=1;
           }
           else{
               $phone=$_POST['phone'];
           }
           if(empty($_POST['email'])){
               $eemail="please enter ur email";
               $var=1;
           }
           else{
               $email=$_POST['email'];
           }
           if(empty($_POST['content'])){
               $econtent="please enter the subject you want to discuse with us";
               $var=1;
           }
           else{
               $content=$_POST['content'];
           }
           if($var!=1){
              include 'D:\wamp\www\tender_project\modle\contact.php';
               new contact1();
               contact1::insert();
           }
           
           
       }
    

?>
