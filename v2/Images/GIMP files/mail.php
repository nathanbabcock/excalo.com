<?php
$name=$_POST["fname"];
$email=$_POST["email"];
$message=$_POST["message"];
$captcha=$_POST["captchaField"];
echo $name." ".$email." ".$message." ".$captcha;
?>