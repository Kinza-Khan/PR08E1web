<?php

$server = "mysql:host=localhost;dbname=pr8e1";
$user = "root" ;
$pass = "";


$pdo = new PDO($server,$user,$pass);
if($pdo){
    // echo "<script>alert('connected')</script>";
} 
?>