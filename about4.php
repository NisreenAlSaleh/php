<?php
    
 
class about{
  
   public function __construct(){
        echo 'halloooo';
      
        $this->pp();
       
        $this->ps();
        

   }
    public function pp(){
        echo'this is the print function in about page';
    }
    protected function ps(){
        echo'this is the ps function in about page';
    }
}

