
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php

  $eusername=$epassword='';
 $username=$password='';
$var=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST['username']))  {
    $eusername='please enter a organization name ';

 }
   else {
       $username=$_POST['username'] ;
       $var=1;
       }
       if($var==1){
    include'D:\wamp\www\tender_project\modle\tender.php';
    new tender();
   tender::update($username);
    
}
}




  ?>
  </head>
  <body>
    
 <form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="post">
        <table>
<tr> <td> user name:</td><td> <input type="text" name="username"> </td><td>
<span class= "error">*<?php echo $eusername ; ?></span></td></tr>
      <tr><td> </td><td><input type="submit"  value="find"> </td> </tr>
        </table>


      </form>

  </body>
 
</html>