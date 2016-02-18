<?php

if($_POST["submit"]) {
    $recipient="tjouglard@gmail.com,cjouglard@gmail.com,cjouglard@metroitnola.com";
    $subject="Metro IT NOLA Contact Page Submission";
	$name=$_POST["name"];
    $company=$_POST["company"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nCompany: $company\nEmail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $email <$email>");


header ('Location: thankyou.html');
exit;
}
?>
