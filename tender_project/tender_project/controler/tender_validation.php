

<?php

function valid_pass($candidate) {
    $matches=" ";
    if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $candidate,$matches))
        return FALSE;
    return TRUE;
}


$tendername=$orgtradem=$startdate=$enddate=$envelopeho=$envelopeopen=$tenderregion=$tender_content="";
$etendername=$eorgtradem=$estartdate=$eenddate=$eenvelopeho=$eenvelopeopen=$etenderregion="";
 $var =0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 if (empty($_POST["tender_name"])) {
     $etendername = " Tendr Name is required";
    
	 $var=1;
   } else {
     $tendername = ($_POST["tender_name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$tendername)) {
       $etendername = "Only letters and white space allowed";
     }
   }

    if (empty($_POST["org_trade_mark"])) {
     $eorgtradem = " orgtradem is required";;$var=1;

   } else {
     $orgtradem= ($_POST["org_trade_mark"]);
     
if (!preg_match("/^[a-zA-Z ]*$/",$orgtradem)) {
       $eorgtradem= "Only letters and white space allowed"; }
     }

    if (empty($_POST["start_date"])) {
     $estartdate = "start date is required";
	 $var=1;
   } else {
     $startdate= ($_POST["start_date"]);
     
}
	     if (empty($_POST["end_date"])) {
     $eenddate = "end date is required";
	 $var=1;
   } else {
     $enddate= ($_POST["end_date"]);
  }

    if (empty($_POST["invelope_hand_over"])) {
     $eenvelopeho = "envelopeho is required";
	 $var=1;
   } else {
     $envelopeho= ($_POST["invelope_hand_over"]);
     

     }
	 
	     if (empty($_POST['invelope_opining'])) {
     $eenvelopeopen = "envelopeopen is required";
	 $var=1;
   } else {
     $envelopeopen= ($_POST['invelope_opining']);
     
}
	     if (empty($_POST["tender_region"])) {
     $etenderregion = " tenderregion is required";$var=1;

   } else {
     $tenderregion= ($_POST["tender_region"]);
     
if (!preg_match("/^[a-zA-Z ]*$/",$tenderregion)) {
       $etenderregion= "Only letters and white space allowed"; 
	   $var=1;}
    }
	 
	     if (empty($_POST["tender_content"])) {
     $etenderregion = " please add your tender content ";$var=1;

   } else {
     $tender_content= ($_POST["tender_content"]);
   }

    
 echo 'halooooooooooooooo';
 if($var!=1){
    echo'dddddddddddd';
     include 'tender.php';
     new tender();
     tender::check_db();
 
	}
	}
	
	


?>







