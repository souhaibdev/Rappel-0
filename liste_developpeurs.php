<?php
require 'connect.php';

$searche = isset($_GET['cherche']) ? $_GET['cherche'] : '';

try{
    if($searche){
        $stmt = $conn->prepare("SELECT * FROM developpeurs WHERE nom like :searche");
        $searcheParam = "%".$searche."%";
        $stmt->bindParam(":searche",$searcheParam);
    }
    else{
        $stmt = $conn->prepare("SELECT * FROM developpeurs");
    }

    $stmt->execute();
    $devs = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="">
        <h2 style="text-align:center;">📋 Liste des Ateliers</h2>
        <input type="text" name="cherche" placeholder="nom de developpeur"/> 
        <button type="submit">Recherche</button>
    </form>
    <br><br>
    <table border="1">
        <tr>
            <th>index</th>
            <th>Le nom de developpeur</th>
            <th>spicialte</th>
            <th>email de devloppeur</th>
            <th>Action</th>
        </tr>
    <?php
           if(!empty($devs)){
            $index = 1;
            foreach($devs as $dev){
                echo "<tr>
                        <td>" .$index++. "</td>
                        <td>" .$dev['nom']. "</td>
                        <td>" .$dev['specialite']. "</td>
                        <td>" .$dev['email']. "</td>
                        <td><a href='details_dev.php?id=".$dev["id"]."'>Details</a>
                        <a href='supprimer_developpeur.php?id=".$dev["id"]."'>supprimer</a>
                        <button>Modifier</button>
                        </td>
                    </tr>";
            }
           }
           else{
                echo "<p> acun developpeur </p>";
           }
    ?>
</body>
</html>