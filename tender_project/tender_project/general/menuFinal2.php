<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>menu2</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="cssFinal.css" rel="stylesheet" type="text/css" media="all" />

<style>
#list{
position:relative;
bottom:420px;
left:30px;

}
</style>
</head>
<body>
	<div id=list >
	<div id="outter">
	   <div id="navbar>
<?php
$menu11 = array(

  'users modulus'  => array('text'=>'users modulus',  'url'=>'user_controler1.php'),
  'tender modulus'  => array('text'=>'tender modulus',  'url'=>'tender_controler.php'),
  'organization modulus' => array('text'=>'organization modulus', 'url'=>'?p=organization modulus'),
 
);

?>
          <ul >
             <li > id="scrol"  />
			 <ul>
              <li> <a href="index (4).html">
                <h2>Menu</h2>
                    <ul>
                     <li><a href="?p=users modulus"><?php echo $menu11['users modulus']['text']; ?></a></li>
					<li><a href="?p=tender modulus"><?php echo $menu11['tender modulus']['text']; ?></a></li>
					<li><a href="?p=organization modulus"><?php echo $menu11['organization modulus']['text']; ?></a></li>
				
				
				</ul>
             </a></li>
             
             </ul>
		  </li>
          </ul>
		  </div>
			
			</div>
</div>

</body>
</html>
