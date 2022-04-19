<?php
//get data from form  

$name = $_POST['inputPatientName'];
$department= $_POST['inputDepartmentName'];
$phone=$_POST['inputPhone'];
$message= $_POST['inputSymptoms'];
$to = "mckvieeceproject3@gmail.com";
$subject = "Mail From Health Care+ User: "+$name;
$txt ="Name = ". $name . "\r\n  Department = ". $department . "\r\n  Phone = ". $phone . "\r\n Query =". $message;
$headers = "From: noreply@healthcare+.com" . "\r\n" .
"CC: admin@healthcare+.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>