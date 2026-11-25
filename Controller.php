<?php

$name = $_POST["name"] ?? "";
$telefon= $_POST ["telefon"] ??"";
$email = $_POST["email"] ?? "";
$lunguages = $_POST["languges"] ?? "";
$subject= $_POST ["subject"] ??"";
$info= $_POST ["info"] ?? "" ;

$contactMethod = $_POST["contact-method"] ?? "";


require "tack.php"; 

else {
 header("Location: index.html")
 exit;

}
?>