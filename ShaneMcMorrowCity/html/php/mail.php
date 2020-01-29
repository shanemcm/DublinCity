<?php

$cCustomerFirstName  = $_REQUEST["firstname"];
$cCustomerSecondName  = $_REQUEST["lastname"];
$cCustomerEmail = $_REQUEST["cemail"];
$cCustomerPhone = $_REQUEST["mobile"];
$cCustomerBudget = $_REQUEST["budget"]
$cCustomerVisit = $_REQUEST["time"]
$cCustomerQuery =$_REQUEST["subject"]
//$cColorcode??? = $_REQUEST["colorcodepicker"];
// Call back URL
$sURltoCall     = $_REQUEST["http://shane.innovador-ie.com/contact2.html"];
// define your additional fields here

// prepare the email body.
// PLAIN TEXT FORMAT
$cEmailBody = "";
$cEmailBody .= "Information from Web form completed online by Web visitor @ " .date("Y-d-m").chr(13);
$cEmailBody .= "============================================================".chr(13);
$cEmailBody .= "Customer First Name : ".$cCustomerFirstName.chr(13);
$cEmailBody .= "Customer Second Name : ".$cCustomerSecondName.chr(13);
$cEmailBody .= "Customer Email : ".$cCustomerEmail.chr(13);
$cEmailBody .= "Customer Phone : ".$cCustomerPhone.chr(13);
$cEmailBody .= "Customer Budget : ".$cCustomerBudget.chr(13);
$cEmailBody .= "First Time : ".$cCustomerVisit.chr(13);
$cEmailBody .= "Subject : ".$cCustomerQuery.chr(13);





mail("shane.mcmorrow@hotmail.com","Online Web query - Dublin City website",$cEmailBody);
header("Location: contact.html");
?>