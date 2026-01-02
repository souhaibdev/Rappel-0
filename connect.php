<?php
$servername = "localhost";
$username = "root";
$password = "";
$datab = "gestion_projets";

try{
$conn = new PDO("mysql:host=$servername;port=3307;dbname=$datab",$username,$password);
echo "khadama";
}
catch(PDOException $e){
     echo $e->getMessage();
}
// $conn = null;
?>