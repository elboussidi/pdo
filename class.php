<?php

class blog {
private $conn ;

public function __construct($db){

$this->conn = $db ; 
}

public function insert($title ,$body){

     $stmt= $this->conn->prepare('INSERT INTO `post` (`id`, `title`, `body`) VALUES (:id, :title, :body)');
    $stat=  $stmt -> execute([
            'id' => null,
            'title' =>$title,
            'body' => $body 
    ]);
    return $stat ;
}

public function delete($id){


}
public function find($id){
        $stmt=$this->conn->prepare('SELECT * FROM `post` WHERE id=:id '); // :id    ['id' => $id or ] or array($id)
$stmt->execute(['id' => $id]);                                   //  ?       [$id ]
$majid= $stmt->fetch();

return $majid ;

}

public function update($id,$title,$body){

      $stmt= $this->conn->prepare('UPDATE `post` SET `title`=:title,`body`=:body  WHERE id=:id');
     $up = $stmt -> execute([
            
            'title' =>$title,
            'body' => $body,
             'id' => $id
    ]);

return $up ;

}


public function sho(){

$stmt=$this->conn->prepare('SELECT * FROM `post`'); // :id    ['id' => $id or ] or array($id)
$stmt->execute();                                   //  ?       [$id ]
$pos= $stmt->fetchAll();

return $pos ;
}

}

?>