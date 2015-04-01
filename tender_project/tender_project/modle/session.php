<?php



class session {



     function __construct(){
   
  }
  

  public function start($username,$password){
     
   $_ESSSION['username']=$username;
     
     $_ESSSION['password']=$password;
    
      echo $_ESSSION['username'];

$_SESSION['last_action']=time();

  
  }
    


 public function destory(){


	if(isset($_SESSION['username'])
and isset($_SESSION['password']))

	
unset($_SESSION['username'],$_SESSION['password']);
    
    //remove all session variables
       
 session::session_unset();

// destroy the session

session_destroy();
      
  headrer('location:indexFinal.php');





        }




 

   }
?>
