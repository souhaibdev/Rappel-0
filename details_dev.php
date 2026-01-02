<?php
require 'connect.php';

if(!isset($_GET["id"])){
    echo "id makaynesh";
}

$id = $_GET["id"];
$stmt = $conn->prepare("SELECT * FROM developpeurs WHERE id = :id");
$stmt->bindParam(':id',$id,PDO::PARAM_INT);
$stmt->execute();

$dev = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$dev){
    echo "Developper makaynech";
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
    <h2>Details du développeur</h2>
    <p><?=$dev['nom'] ?></p>
    <p><?=$dev['email'] ?></p>
    <p><?=$dev['specialite'] ?></p>
    <p><img src="<?php echo $dev['image']; ?>" alt="Photo" width='50'></p>
    <a href="liste_developpeurs.php">← Retour à la liste</a>
    <a href="liste_developpeurs.php">Modifier</a>
    <a href="liste_developpeurs.php">← Supprimer</a>
</body>
</html>