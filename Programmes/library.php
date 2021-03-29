<?php


            
	$title = 'Ressource';

?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>
<body>
	<div id="main">
		<div id="header">
			<div id="logo">
				<div id="logo_text">
					<h1>
						<a href="#"><span class="logo_colour">Interface entreprise</span> </a>
					</h1>
					<h2>Ici se trouve toutes les cartes de compagnies/entreprises créer par les utilisateurs.</h2>


					<?php
try {$bdd = new PDO('mysql:host=localhost;dbname=Epitech;charset=utf8', 'root', '');}
catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

$reponse = $bdd->query('SELECT * FROM profil');


 // On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())

{

?>

   <p>

   <strong>Nom</strong> : <?php echo $donnees['nom']; ?><br />

   Le nom de la compagnie est : <?php echo $donnees['nomcompagnie']; ?><br />

   L'email est <?php echo $donnees['email']; ?><br />

   Le numéro de téléphone est <?php echo $donnees['tel']; ?></em>

  </p>

<?php

}

       

$reponse->closeCursor(); // Termine le traitement de la requête
?>
			
					</div>
		</div>
	</div>

	

<a href="pageaccueil.php"><input type="button" value="Retour sur la page d'acceuil"></a>
		
			<div id="footer">
				<p>
					<a href="#">Exercice Epitech - Lucas</a>
				</p>
			
</body>
</html>