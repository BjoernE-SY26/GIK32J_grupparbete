<?php

$name = $_POST["name"] ?? "";
$telefon= $_POST ["telefon"] ??"";
$email = $_POST["email"] ?? "";
$lunguages = $_POST["languges"] ?? "";
$contactMethod = $_POST["contact-method"] ?? "";

require "tack.php"; 

else {
 header("Location: index.html")
 exit;

}
?>