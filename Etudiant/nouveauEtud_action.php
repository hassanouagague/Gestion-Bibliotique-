<?php
require_once('connexion.php');
$connexion=connect_bd();
$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];
$requet="insert into etudiant values
('$code','$nom','$prenom','$adresse','$classe')";
if(!$connexion->query($requet)) echo "Problème d'insertion <br/>";
else require('listeEtudiants.php');
?>
