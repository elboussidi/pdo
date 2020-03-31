<?php require './conn.php'; 
$id=$_GET['id'];
    $stmt=$conn->prepare('SELECT * FROM `post` WHERE id=:id '); // :id    ['id' => $id or ] or array($id)
$stmt->execute(['id' => $id]);                                   //  ?       [$id ]
$majid= $stmt->fetch();

   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>
<body>
<center> <h3><a href="http://localhost/pdo"> bonjour</a></h3></center> 

  <hr style="width: 50%" >
  
<div class="post">
    <h4> update data</h4><BR>
    <form method="POST">
        <input name="title" type="text" placeholder="YOUR title" value="<?php echo $majid['title'];  ?>" ><br><br>
        
        <textarea name="body" placeholder="body"> <?php echo $majid['body'];?> </textarea>
        <br><br>
        <input name="update" type="submit" value="update">
    </form>

<?php
$er="";
if(isset($_POST['update'])){
    $id=$_GET['id'];
    $title=$_POST['title'];
    $body=$_POST['body'];
    //echo $name ."<br>".$sold;
    
    if(empty($title) || empty($body)){
        
        $er="filed empty";
    } else {
        
    // $stmt= $conn->prepare('INSERT INTO `sold` (`id`, `title'`, body`) VALUES (?, ?, ?)');
     //$stmt -> execute([null,$title,$body]);
 
        
        
        
      $stmt= $conn->prepare('UPDATE `post` SET `title`=:title,`body`=:body  WHERE id=:id');
     $stmt -> execute([
            
            'title' =>$title,
            'body' => $body,
             'id' => $id
    ]);
     
     if($stmt){
         echo 'data has been update';
     }
    } 
}

?><br><br>
    <div class="alert alert-danger"><?php echo $er;?> </div>
</body>
</html>

