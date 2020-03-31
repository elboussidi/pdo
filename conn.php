<?php

$host = "localhost";
$db="tce";
$user="majid";
$pass="CHICHAOUA";

try {
   
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

//echo 'conected';
} catch (Exception $exc) {
    echo $exc->getMessage();
}
