<?php
require_once('connexion.php');
$connexion=connect_bd();
$codeL=$_POST['codeL'];
$titre=$_POST['titre'];
$auteur=$_POST['auteur'];
$date=$_POST['date'];
$requet="update livre set titre='$titre',auteur='$auteur',dateedition='$date' where codelivre='$codeL'";

if(!$connexion->query($requet)) echo "Problème d'insertion <br/>";
else require('listeLivres.php');
?>