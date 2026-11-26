<?php
if ($_SERVER ["REQUEST_METHOD"] === "POST"){

// hämta information från formuläret
    $name = trim($_POST["name"] ?? "");
    $telefon= trim($_POST ["telefon"] ??"");
    $email =trim($_POST["email"] ?? "");
    $languages = $_POST["languages"] ??[];
    $subject= $_POST ["subject"] ??"";
    $info= trim($_POST ["info"] ?? "" );
    $contactMethod = $_POST["contact-method"] ?? "";

// initiera felmeddelanden
$nameError = "";
$telefonError = "";
$emailError = "";
$languagesError = "";
$contactMethodError = ""; 

// validera formuläret 

if (empty($name)) {
    $nameError = "Du måste fylla i ditt namn.";
} elseif (!preg_match("/^[\p{L}\s'-]+$/u", $name)) {
    $nameError = "Namnet innehåller otillåtna tecken";
}

if (empty($telefon)) {
    $telefonError = "Du måste fylla i ditt telefonnummer.";
} elseif (!preg_match("/^(07[0-9]{8}|\+467[0-9]{8})$/", $telefon )) {
    $telefonError = "Ange ett giltigt svenskt mobilnummer!";
} 


if (empty($email)) {
    $emailError = "Ange giltigt e-postadress.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "Ange en giltig e-postadress!";
}

if (empty($languages)) {
    $languagesError = "Du måste fylla i minst ett programmeringspråk!";
}

if (empty($contactMethod)) {
    $contactMethodError = "Du måste välja hur du vill bli kontaktad!";
}

//kontrollera om några fel har uppstått $hasErrors 
$hasErrors =
    !empty($nameError) ||
    !empty($telefonError) ||
    !empty($emailError) ||
    !empty($languagesError) ||
    !empty($contactMethodError);

// Bestäm vilken sida som ska visas:
if ($hasErrors) {
    require "index.php";
} else {
    require "tack.php";
}

//Redirect if not a post request
} else {
    header("Location: index.php");
    exit;
}
?>