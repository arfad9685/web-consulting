<?php
$name=$_POST['name'];
$email=$_POST['email'];

$message=$_POST['message'];

$to=$email;

$message="From:$name <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <info@ganexconsulting.com>' . "\r\n";
$headers .= 'Cc: corry@ganexconsulting.com' . "\r\n";
@mail($to,$message,$headers);
if(@mail)
{
echo "Email sent successfully !!";	
}
?>