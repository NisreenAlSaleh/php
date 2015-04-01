<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>menu2</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/cssFinal.css" rel="stylesheet" type="text/css" media="all" />
<style>
#ten{
position:relative;
bottom:740px;
left:920px;
background:#E6F0F0;
 width:110px;

}
h1{
width:100px;
}
</style>
</head>
<body>
	<div id=ten >
	<div id="outter">
	   <div id="navbar>
<?php
$menu11 = array(

  'Agricultural and Veterinary Supplies'  => array('text'=>'Agricultural and Veterinary Supplies', 
  'url'=>'?p= Agricultural and Veterinary Supplies'),
  'Foodstuffs'  => array('text'=>'Foodstuffs',  'url'=>'?p=Foodstuffs'),
  'Commercial Supplies' => array('text'=>'Commercial Supplies', 'url'=>'?p=Commercial Supplies'),
   'Consulting and training'  => array('text'=>'Consulting and training',  'url'=>'?p=Consulting and training'),
  'Services'  => array('text'=>'Services',  'url'=>'?p=Services'),
'Construction and Building Materials'  => array('text'=>'Construction and Building Materials', 
	   'url'=>'?p=Construction and Building Materials'),
'Supplies medical and scientific'  => array('text'=>'Supplies medical and scientific', 'url'=>'?p=Supplies medical and scientific'),
		   
  'Information technology'  => array('text'=>'Information technology','url'=>'?p=Information technology'),
 'Media, advertising and printing'  => array('text'=>'Media, advertising and printing',  'url'=>'?p=Media, advertising and printing'),
 'Real estate and rental'  => array('text'=>'Real estate and rental',  'url'=>'?p=Real estate and rental'),
   'Insurance Services'  => array('text'=>'Insurance Services',  'url'=>'?p=Insurance Services'),
  'Administrative and Financial Services'  => array('text'=>'Administrative and Financial Services', 
  'url'=>'?p=Administrative and Financial Services'),
  'Elevators and escalators'  => array('text'=>'Elevators and escalators',  'url'=>'?p=Elevators and escalators'),
   'Machinery and equipment'  => array('text'=>'Machinery and equipment',  'url'=>'?p=Machinery and equipment'),
	  'Vehicles, cars and spare parts'  => array('text'=>'Vehicles, cars and spare parts',  'url'=>'?p=Vehicles, cars and spare parts'),

);

?>
          <ul >
             <li > id="scrol"  />
			 <ul>
              <li> <a href="index (4).html">
                <h1>Areas bidding</h1>
                    <ul>
    <li><a href="?p=Agricultural and Veterinary Supplies"><?php echo $menu11['Agricultural and Veterinary Supplies']['text']; ?></a></li>
	<li><a href="?p=Foodstuffs "><?php echo $menu11['Foodstuffs']['text']; ?></a></li>
    <li><a href="?p=Commercial Supplies "><?php echo $menu11['Commercial Supplies']['text']; ?></a></li>
	<li><a href="?p=Consulting and training "><?php echo $menu11['Consulting and training']['text']; ?></a></li>
	<li><a href="?p= Services"><?php echo $menu11['Services']['text']; ?></a></li>
	<li><a href="?p=Construction and Building Materials "><?php echo $menu11['Construction and Building Materials']['text']; ?></a></li>
	<li><a href="?p=Supplies medical and scientific "><?php echo $menu11['Supplies medical and scientific']['text']; ?></a></li>
	<li><a href="?p= Information technology"><?php echo $menu11['Information technology']['text']; ?></a></li>
	<li><a href="?p=Media, advertising and printing "><?php echo $menu11['Media, advertising and printing']['text']; ?></a></li>
	<li><a href="?p=Real estate and rental "><?php echo $menu11['Real estate and rental']['text']; ?></a></li>
	<li><a href="?p= Insurance Services"><?php echo $menu11['Insurance Services']['text']; ?></a></li>
	<li><a href="?p=Administrative and Financial Services "><?php echo $menu11['Administrative and Financial Services']['text']; ?></a></li>
	<li><a href="?p= Elevators and escalators"><?php echo $menu11['Elevators and escalators']['text']; ?></a></li>
	<li><a href="?p= Machinery and equipment"><?php echo $menu11['Machinery and equipment']['text']; ?></a></li>
	<li><a href="?p= Vehicles, cars and spare parts"><?php echo $menu11['Vehicles, cars and spare parts']['text']; ?></a></li>
				
				
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
