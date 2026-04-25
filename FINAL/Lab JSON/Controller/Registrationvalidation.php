<?php
session_start();
$name = "";
$email= "";
$website = "";
$gender = "";
$datafile ="../data.json";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST['website'];
    $gender = $_POST["gender"];
     
    if (!empty($name) && strlen($name) > 5 && filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($website, FILTER_VALIDATE_URL) && !empty($gender))
     {
    
}   
?> 