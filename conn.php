<?php


try
{
$db = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'arsene', '555555');
print 'merci connection';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
