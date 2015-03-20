
<?php

define ('DS',DIRECTORY_SEPARATOR);
class Routing{
public $routes=array();
function router()
{
if(isset($_GET['url']))
{
$url=$_GET['url'];

$url=rtrim($url,'/');
$url=explode('/', $url);
foreach($url as $key => $value)
$this -> routes[$key]=$value;
}
 require_once "app".DS."model".DS."root.php";  
      $root=new root();

if(isset($this->routes['0']))
    {
    // firstpart means the modelname
    $firstpart=$this->routes['0'];
    $file="app".DS."model".DS.$firstpart.".php";
    
    if(file_exists($file))
    {
        require_once $file;
        $app=new $firstpart();
     if(isset($this->routes['1']))
         {
         // secondpart means the method 
       $secondpart= $this->routes['1'];
       // to make sure if the method exists
       if(method_exists($firstpart, $secondpart))
         $app -> $secondpart();
       else
           $app->main();
     }else 
            $app->main();         
    }
    else 
    {
    // if(method_exists('root', $firstpart))
            // $root->$firstpart();
    // else
         $root ->main();
    }
    }else
    {
        
      $root->main(); 
    }
}
}
$Routing=new Routing();
$Routing ->router();
/*
 public static getModel($model){
 $file="app".DS."model".DS.$firstpart.".php";
   if(file_exists($file))
    {
       require_once '$file';  
       $model_obj=new model();
       return $model_obj;
    }
    echo"model dosen't exists";
 }
 
 */
?>

