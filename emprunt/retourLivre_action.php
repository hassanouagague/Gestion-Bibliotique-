<?php
require_once('connexion.php');
$connexion=connect_bd();
$code=$_POST['codeL'];
$requet="delete from emprunte where CODELIVRE='$code'";
if(!$connexion->query($requet)) echo "Problème de supprission <br/>";
else require('listEmp.php');
?>