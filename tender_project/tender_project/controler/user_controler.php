

<?php
new user_controler();
    
class user_controler {
    function __construct(){
       
     echo'this is the user controler';
    
    }
    function create(){
       
       include  'D:\wamp\www\tender_project\view\user_form.php';
       
    }
    function search(){
        include 'yassmin2.php';
       
    }
  function delete(){
 
  include'D:\wamp\www\tender_project\view\user_delete_form.php';
  
       } 
       function update(){
           include'D:\wamp\www\tender_project\view\user_update_form.php';
       }
   function main(){
       echo'main function';
   }
    }




?>
    



