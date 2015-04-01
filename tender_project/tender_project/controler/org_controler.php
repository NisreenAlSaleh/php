
<?php

new org_controler();
class org_controler {
    
    function __construct() {
    
     
    }
    function create(){
      include'D:\wamp\www\tender_project\view\org_form.php';
       
    }
    function search(){
        include 'organization.php';
    }
       function delete(){
 
  include'D:\wamp\www\tender_project\view\org_delete_form.php';
  
       } 
       function update(){
            include'D:\wamp\www\tender_project\view\org_update_form.php';
       }
   function main(){
        include'D:\wamp\www\tender_project\general\indexFinal.php';
   }
    }

 


?>



