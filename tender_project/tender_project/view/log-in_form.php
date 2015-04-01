<html>
<?php
$error='';

?>
    <?php
    include'D:\wamp\www\tender_project\modle\login_validation.php';

    
    ?>
    <form action="<?php echo($_SERVER["PHP_SELF"]);?>"method="post">
<table>
    
<tr> <td> User Name</td><td> <input type="text" name="username"> </td><td>
<span class= "error">*<?php echo $error; ?></span></td></tr>
<tr> <td> Password</td><td> <input type="text" name="password"> </td><td>
        <span class= "error">*<?php echo $error; ?></span></td></tr>
        <tr><td> </td><td><input type="submit" name="submit" value="Log in"> </td> </tr>
</table>
</form>
        
        </html>