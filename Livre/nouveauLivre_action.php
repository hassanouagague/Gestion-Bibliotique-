<?php
require_once('connexion.php');
$connexion=connect_bd();
$codeL=$_POST['codeL'];
$titre=$_POST['titre'];
$auteur=$_POST['auteur'];
$date=$_POST['date'];
$requet="insert into livre values
('$codeL','$titre','$auteur','$date')";
if(!$connexion->query($requet)) echo "Problème d'insertion <br/>";
else require('listeLivres.php');
?>