<?php

$eusername=$efirstname=$elastname=$eemail=$ephone=$epassword=$erpassword=$pass=$genderErr="";

?>
<html>
<head>
<style type="text/css">
.form-style-3{
    max-width: 450px;
    font-family: cursive;
}
.form-style-3 label{
    display:block;
    margin-bottom: 10px;
}
.form-style-3 label > span{
    float: left;
    width: 100px;
    color: #2E4E4E;
    font-weight: bold;
    font-size: 13px;
    text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    margin: 0px 0px 10px 0px;
    border: 1px solid #7DB1B1;
    padding: 20px;
    background: #CEE2E2;
    box-shadow: inset 0px 0px 15px #AECECE;
    -moz-box-shadow: inset 0px 0px 15px #AECECE;
    -webkit-box-shadow: inset 0px 0px 15px #AECECE;
}
.form-style-3 fieldset legend{
    color: #2E4E4E;
    border-top: 1px solid #5C9D9D;
    border-left: 1px solid #5C9D9D;
    border-right: 1px solid #5C9D9D;
    border-radius: 5px 5px 0px 0px;
    -webkit-border-radius: 5px 5px 0px 0px;
    -moz-border-radius: 5px 5px 0px 0px;
    background: #DEEBEB;
    padding: 0px 8px 3px 8px;
    box-shadow: -0px -1px 2px #F1F1F1;
    -moz-box-shadow:-0px -1px 2px #F1F1F1;
    -webkit-box-shadow:-0px -1px 2px #F1F1F1;
    font-weight: normal;
    font-size: 12px;
}
.form-style-3 textarea{
    width:250px;
    height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border: 1px solid #AECECE;
    outline: none;
    color: #1C2F2F;
    padding: 5px 8px 5px 8px;
    box-shadow: inset 1px 1px 4px #AECECE;
    -moz-box-shadow: inset 1px 1px 4px #AECECE;
    -webkit-box-shadow: inset 1px 1px 4px #AECECE;
    background: #DEEBEB;
    width:initial;
}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
    background: #DEEBEB;
    border: 1px solid #AECECE;
    padding: 5px 15px 5px 15px;
    color: #1C2F2F;
    box-shadow: inset -1px -1px 3px #AECECE;
    -moz-box-shadow: inset -1px -1px 3px #AECECE;
    -webkit-box-shadow: inset -1px -1px 3px #AECECE;
    border-radius: 3px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;    
    font-weight: bold;
}
.required{
    color:red;
    font-weight:normal;
}
</style>
</head>
<body>
<?php        include 'validation.php';
new validation();
validation::valide();

?>

<div class="form-style-3">
        <form action="<?php echo($_SERVER["PHP_SELF"]);?>"method="post">
			<fieldset>
<table>
<label for="field1"><tr> <td> Username:</td><td> <input type="text" name="username"> </td><td>
<span class= "error">*<?php echo $eusername; ?></span></td></tr>
<label for="field1"><tr> <td> Organization name:</td><td> <input type="text" name="org_name"> </td><td>
<label for="field1"><tr><td> First_name: </td><td><input type="text" name ="firstname"> </td><td>
<span class= "error">*<?php echo $efirstname; ?></span></td></tr>
<label for="field1"><tr><td> Last_name: </td><td><input type="text" name ="lastname" > </td><td>
<span class= "error">*<?php echo $elastname; ?></span></th></tr>
<label for="field1"><tr><td> Email: </td><td><input type="text" name ="email" > </td><th>
<span class= "error">*<?php echo $eemail ; ?></span></td></tr>
<tr> <td> gender: </td><td><input type="radio" name="gender" value="female">Female</td> <td><span class="error"> <?php echo $genderErr;?></span></td> </tr>
<tr> <td>  </td><td><input type="radio" name="gender" value="male">Male</td><td>
 <!-- <span class= "error">*<?php echo $eusername; ?></span></th></tr> -->
<label for="field1"><tr><td> Phone: </td><td><input type="text" name ="phone" > </td><td>
<span class= "error">*<?php echo $ephone ; ?></span></td></tr>
<label for="field1"><tr><td> Password: </td><td><input type="text" name ="password"> </td><td>
<span class= "error">*<?php echo $epassword  ; ?></span></td></tr>
<label for="field1"><tr><td> r_password </td><td><input type="text" name ="r_password" > </td><td>
<span class= "error">*<?php echo $erpassword  ; ?></span></td></tr>

<tr> <td></td> <td> <span class="erroe"> <?php echo $pass;?> </td></tr>


<tr><td> </td><td><label><span>&nbsp;</span><input type="submit" value="Regester" /></label> </td> </tr>

</table>
</fieldset>
</form>
     </div> 
</body>
</html>












