<?php

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Body=$_POST['Body'];

$to = "srivastavaharshit848@gmail.com";
$sub = "Query / Suggesstion / Reviews";
$msg="Hello ";
if (mail($to,$sub,$msg))
	echo "Your Mail is sent successfully.";
else
	echo "Your Mail is not sent. Try Again.";


?>
