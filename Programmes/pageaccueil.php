<?php


            
	$title = 'Page d acceuil'

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
						<a href="#"><span class="logo_colour">Page d'accueil</span> </a>
					</h1>
					<h2>Bienvenue sur la page d'accueil</h2>
				<fieldset>
						<a href="etape3.php"><input type="button" value="Créer une nouvelle carte d'entreprise"></a>
						<a href="etape2.php"><input type="button" value="Créer votre carte d'entreprise"></a>
						<a href="library.php"><input type="button" value="Consulter les cartes d'entreprises existantes"></a>
						<a href="deconnexion.php"><input type="button" value="Déconnexion"></a>

				</fieldset>

				</div>
			</div>
			<div id="footer">
				<p>
					<a href="#">Exercice Epitech - Lucas</a>
				</p>
			</div>
		</div>
	</div>
</body>
</html>