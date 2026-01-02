<?php
require 'connect.php';

if(!isset($_GET['id'])){
    echo "id makaynech";
}

$id = $_GET['id'];


try{
    $stmt = $conn->prepare("DELETE FROM developpeurs WHERE id = :id");
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);

    if($stmt->execute()){
        echo "developpeur tmsah";
    }
    else{
        echo "kayn chi problem";
    }

    header('Location: liste_developpeurs.php');
    exit;
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
