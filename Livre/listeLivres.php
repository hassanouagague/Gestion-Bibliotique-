<!DOCTYPE html>
<html lang="fr">
<head>
 <title>liste des livres</title>
 <link rel="stylesheet" href="Css/stylelist2.css" />
</head>
<body>
    
<h1><span class="yellow">Liste Des Livres</span></h1>
<h2>Resultat</h2>
<?php
require_once('connexion.php');
$connexion=connect_bd();
$sql="SELECT * from LIVRE";
if(!$connexion->query($sql)) echo "Pb d'accès à la table livre";
else{
?>
<table class="container">
    <thead>
		<tr>
			<th><h1>Code Livre</h1></th>
			<th><h1>Titre</h1></th>
			<th><h1>Auteur</h1></th>
			<th><h1>Date</h1></th>
		</tr>
	</thead>
    <tbody>
<?php
foreach ($connexion->query($sql) as $row)
echo "<tr><td>".$row['CODELIVRE']."</td>
<td>".$row['TITRE']."</td>
<td>".$row['AUTEUR']."</td>
<td>".$row['DATEEDITION']."</td></tr><br/>\n";
?>
</tbody>
</table>
<?php } ?>


</body>
</html>