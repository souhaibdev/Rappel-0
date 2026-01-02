<?php
require 'connect.php';

$message = '';
if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $specialite = $_POST['specialite'];

    $imagePath = '';
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $targetDir = 'images/' ;
        $tagetFile = $targetDir .basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'],$tagetFile);
        $imagePath = $tagetFile;
}

    $stmt = $conn->prepare("INSERT INTO developpeurs (nom,email,mot_de_passe,specialite,image) VALUES
    (:nom,:email,:mot_de_passe,:specialite,:image)");
    $stmt->bindParam(':nom',$nom);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':mot_de_passe',$mot_de_passe);
    $stmt->bindParam(':specialite',$specialite);
    $stmt->bindParam(':image',$imagePath);

    if($stmt->execute()){
        $message = "ra tzad";
    }
    else{
        $message = "kayn chi mochkil";
    }

    header('Location: index.php');
    exit;
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
    <h2>Ajouter un nouveau developpeur</h2>
    <?php if($message) echo "<p>$message</p>" ?>
    <form method="POST" action="" enctype="multipart/form-data">
        <label>Nom:</label><br>
        <input type="text" name="nom" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Mot de passe:</label><br>
        <input type="password" name="mot_de_passe" required><br><br>

        <label>Spécialité:</label><br>
        <input type="text" name="specialite"><br><br>

        <label>Image:</label><br>
        <input type="file" name="image"><br><br>

        <button type="submit" name="submit">enregistrer</button>
    </form>
</body>
</html>


