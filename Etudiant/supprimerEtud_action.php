<?php
require_once('connexion.php');
$connexion=connect_bd();
$code=$_POST['code'];
$requet="delete from etudiant where CODEETUDIANT='$code'";
if(!$connexion->query($requet)) echo "Problème de supprission <br/>";
else require('listeEtudiants.php');
?>
