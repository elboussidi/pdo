<?php require './conn.php'; 
include ('class.php') ;

$post = new blog($conn) ; 

$pos = $post->sho() ;
     
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>
<body style="margin-left: 20%;">
 <center> <h3><a href="http://localhost/pdo"> bonjour</a></h3></center>  

  <hr style="width: 50%" >
  <a href="insert.php"> <button class="btn btn-success " style="margin-left: 40px;">insert data</button></a><br><br>
<div class="post" style="padding-left:5%;">
    <?php 
    foreach ($pos as $po){
        echo " <h4 style='margin-left: 30%;'>" .$po['title']."</h4><BR>";
    echo "<p style='margin-left: 20%;'>" .$po['body']."</p> ";
    
    echo '<a class="btn btn-danger" href=delete.php?id='.$po["id"].'>delete</a> ';
    echo '<a class="btn btn-info" href=update.php?id='.$po["id"].'>edit</a><hr> ';
   
    }
     
       ?>
</div>
</body>
</html>