

<?php


class tender_controler {
    function __construct(){
    

   
    }
    function create(){
       include  'D:\wamp\www\tender_project\view\tender_form.php';
       
    }
    function search(){
        include'search_form1.php';
       
    }
   function delete(){
 
  include'D:\wamp\www\tender_project\view\tender_delete_form.php';
  
       } 
   function main(){
       echo'this is the main function';
   }
   function update(){
     include'D:\wamp\www\tender_project\view\tender_update_form.php';  
   }
   
    }




?>
    



