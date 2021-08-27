<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>liste des étudiant</title>
 <link rel="stylesheet" href="Css/stylelist2.css" />
 
</head>
<body>
<h1><span class="yellow">Liste Des Etudiants</pan></h1>
<h2>Resultat de recherche</h2>

<?php
require_once('connexion.php');
$connexion=connect_bd();
$critere=$_POST['critere'];
$valeur=$_POST['valeur'];
$requet="select * from etudiant where $critere='$valeur'";
if(!$connexion->query($requet)) echo "Pb d'accès à la table etudiant";
else{
    ?>
    <table class="container" id="containerR">
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
    foreach ($connexion->query($requet) as $row)
    echo "<tr><td>".$row['CODEETUDIANT']."</td>
    <td>".$row['NOM']."</td>
    <td>".$row['PRENOM']."</td>
    <td>".$row['ADRESSE']."</td>
    <td>".$row['CLASSE']."</td></tr><br/>\n";
    ?>
    </tbody>
    </table>
    <?php } ?>
    </div>

</body>
</html>