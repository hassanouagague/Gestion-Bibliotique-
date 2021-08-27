<?php
require_once('connexion.php');
$connexion=connect_bd();
$codeL=$_POST['codeL'];
$codeE=$_POST['codeE'];
$dateEmp=$_POST['dateEmp'];


$requet="INSERT INTO emprunte VALUES ('$codeL','$codeE','$dateEmp');";
$CODELIVRE="SELECT CODELIVRE FROM EMPRUNTE";
if((!$connexion->query($requet))&& ($codeL==$CODELIVRE)) echo "Problème d'insertion <br/>";
else require('listEmp.php');
?>