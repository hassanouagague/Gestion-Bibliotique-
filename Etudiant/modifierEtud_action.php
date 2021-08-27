<?php
require_once('connexion.php');
$connexion=connect_bd();
$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];
$requet="update etudiant set nom='$nom',prenom='$prenom',adresse='$adresse',classe='$classe' where codeetudiant='$code'";

if(!$connexion->query($requet)) echo "Problème d'insertion <br/>";
else require('listeEtudiants.php');
?>