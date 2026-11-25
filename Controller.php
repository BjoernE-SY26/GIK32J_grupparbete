<?php
if ($_SERVER ["REQUEST_METHOD"] === "POST"){


    $name = $_POST["name"] ?? "";
    $telefon= $_POST ["telefon"] ??"";
    $email = $_POST["email"] ?? "";
    $languages = $_POST["languages"] ??[];
    $subject= $_POST ["subject"] ??"";
    $info= $_POST ["info"] ?? "" ;
    $contactMethod = $_POST["contact-method"] ?? "";


require "tack.php"; 
}

else {
 header("Location: index.html");
 exit;

}
?>