<?php

$host = "localhost";
$db="oop";
$user="root";
$pass="";

try {
   
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

//echo 'conected';
} catch (Exception $exc) {
    echo $exc->getMessage();
}
