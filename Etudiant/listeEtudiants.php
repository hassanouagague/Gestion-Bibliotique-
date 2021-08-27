<!DOCTYPE html>
<html lang="fr">
<head>
 <title>liste des étudiant</title>
 <link rel="stylesheet" href="Css/stylelist2.css" />
</head>
<body>
    
<h1><span class="yellow">Liste Des Etudiants</span></h1>
<h2>Resultat</h2>
<?php
require_once('connexion.php');
$connexion=connect_bd();
$sql="SELECT * from ETUDIANT";
if(!$connexion->query($sql)) echo "Pb d'accès à la table etudiant";
else{
?>
<table class="container">
    <thead>
		<tr>
			<th><h1>code</h1></th>
			<th><h1>Nom</h1></th>
			<th><h1>Prénom</h1></th>
			<th><h1>Adresse</h1></th>
         <th><h1>Classe</h1></th>
		</tr>
	</thead>
    <tbody>
<?php
foreach ($connexion->query($sql) as $row)
echo "<tr><td>".$row['CODEETUDIANT']."</td>
<td>".$row['NOM']."</td>
<td>".$row['PRENOM']."</td>
<td>".$row['ADRESSE']."</td>
<td>".$row['CLASSE']."</td></tr><br/>\n";
?>
</tbody>
</table>
<?php } ?>


</body>
</html>