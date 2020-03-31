<?php require './conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>insert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>
<body>
  <center> <h3><a href="http://localhost/pdo"> bonjour</a></h3></center> 

  <hr style="width: 50%" >
  
<div class="post">
    <h4> inset new data</h4><BR>
    <form method="POST">
        <input name="title" type="text" placeholder="YOUR title"  class="form-control" ><br><br>
        
        <textarea name="body" style="height: 150px;" placeholder="body"   class="form-control"></textarea>
        <br><br>
         <input name="submit" class="alert alert-info" style="margin-left: 20%;" type="submit" value="send">
    </form>

<?php
$er="";
if(isset($_POST['submit'])){
    
    $title=$_POST['title'];
    $body=$_POST['body'];
    //echo $name ."<br>".$sold;
    
    if(empty($title) || empty($body)){
        
        $er="filed empty";
    } else {
        
    // $stmt= $conn->prepare('INSERT INTO `sold` (`id`, `title'`, body`) VALUES (?, ?, ?)');
     //$stmt -> execute([null,$title,$body]);
     
      $stmt= $conn->prepare('INSERT INTO `post` (`id`, `title`, `body`) VALUES (:id, :title, :body)');
     $stmt -> execute([
            'id' => null,
            'title' =>$title,
            'body' => $body 
    ]);
     
     if($stmt){
       
          echo ' <div class="alert alert-success">data has been insert </div>';
     }
    } 
}
?>
<br><br>
<?php 
if(!empty($er)){
    echo ' <div class="alert alert-danger">'. $er.' </div>';
}
?>
    

</body>
</html>
