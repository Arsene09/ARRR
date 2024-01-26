<!DOCTYPE html>
<html>
<head>
<title>Cours PHP / MySQL</title>
<meta charset="utf-8">
<link rel="stylesheet" href="cours.css">
</head>
<body>
<h1>Bases de données MySQL</h1> 
<?php
$servername = 'localhost';
$username = 'formulaire';
$password = '555555';

try{
$conn = new PDO("mysql:host=localhost;dbname=formulaire", $username,
$password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'Connexion réussie';
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
?>
</body>
</html> 