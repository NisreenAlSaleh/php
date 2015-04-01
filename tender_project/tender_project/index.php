<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tender project</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="theams/css/cssFinal.css" rel="stylesheet" type="text/css" media="all" />




</style>

</head>
<body>
<?php
include'general/Rout.php';
include '/general/errors.php';
include '/general/genral.php';
include '/general/system_array.php';
$genral = new Genral();
$rout = new Routing();
?>
<div id="all">
   <div id="header">
   <?php
   include'theams/Views/headerFinal.php';
   ?>
   </div>
   
   <div id="menu1">
   <?php
    echo $genral->GenerateMenu($menu11,"menu");
   ?>
   </div>
   
   
    <div id="content">
	 <?php
         
         $rout->router();
   ?>
	</div>
	<div id="menu2">
		<?php
    include'theams/Views/menuF.php';
   include'theams/Views/menu.php';
   include'theams/Views/log-in_form.php';
   ?>
	</div>
	
	</div>
	
	 <div id="footer">
	 <?php
   include'theams/Views/footerFinal.php';
   ?>
	 
	 </div>
	  



</body>
</html>
