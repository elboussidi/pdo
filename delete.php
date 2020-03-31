<?php
require './conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
  $stmt=$conn->prepare("DELETE FROM `post` WHERE  id =?") ;
  $stmt->execute([$id]);
  
  if($stmt){
      echo 'delet successfuly';
  } else {
      echo 'error';
  }
    
}