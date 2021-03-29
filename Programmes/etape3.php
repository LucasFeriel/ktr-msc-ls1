<?php


            
	$title = 'Carte entreprise';
	$nom = (isset($_SESSION['nom']) && !empty($_SESSION['nom']))? $_SESSION['nom'] : '';
	$nomcompagnie = (isset($_SESSION['nomcompagnie']) && !empty($_SESSION['nomcompagnie']))? $_SESSION['nomcompagnie'] : '';
	$email = (isset($_SESSION['email']) && !empty($_SESSION['email']))? $_SESSION['email']: '';
	$numerotel = (isset($_SESSION['numerotel']) && !empty($_SESSION['numerotel']))? $_SESSION['numerotel']: '';

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
						<a href="#"><span class="logo_colour">Profil</span> </a>
					</h1>
					<h2>Créer une carte de compagnie</h2>
				</div>
			</div>
			<div id="site_content">
				<div id="content">
					<form method="post" action="add.php" class="login">
						<fieldset>
							<legend>Carte de compagnie:</legend>
							<div>
								<label for="nom">Nom:</label>
								<input type="text" name="nom" placeholder="Insérez le prénom et nom"  required value="<?php echo $nom; ?>" /><br />
							</div>
							<div>
								<label for="nomcompagnie">Nom de la compagnie:</label>
								<input type="text" name="nomcompagnie" placeholder="Insérez le nom de la compagnie" required value="<?php echo $nomcompagnie; ?>" /><br />
							</div>
							<div>
								<label for="email">Email:</label>
								<input type="text" name="email" placeholder="Insérez l'email de l'entreprise" required value="<?php echo $email; ?>" /><br />
							</div>
							<label for="numero">Insérez le numéro de téléphone :</label>

							<input type="tel" id="numero" name="numero"
      							 pattern="[0-9]{10}"  required> 
      								

						</fieldset>
						<input type="submit" name="add_profil" value="Valider la carte de compagnie" />
						<a href="deconnexion.php"><input type="button" value="Déconnexion"></a>
        
					</form>
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