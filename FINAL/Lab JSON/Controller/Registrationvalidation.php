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
?>