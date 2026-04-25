<?php
$name = "";
$email= "";
$address = "";
$gender = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
   { $name = $_POST["name"];
      echo $name;
   }
?>