<?php



try
{
	 $pdo = new PDO("mysql:host=localhost;dbname=Epitech","root","");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST["nom"]))
{
$nom = $_POST['nom'];
$compagnie = $_POST['nomcompagnie'];
$email = $_POST['email'];
$numero = $_POST['numero'];

 $requete="INSERT INTO profil(nom, nomcompagnie, email, tel) 
 						VALUES(:nom, :nomcompagnie, :email, :numero)"; 
 						$res = $pdo->prepare($requete);
  $exec = $res->execute(array(":nom"=>$nom,":nomcompagnie"=>$compagnie, ":email"=>$email, ":numero"=>$numero));
 					
if($exec){
    echo 'Données insérées';
  }else{
    echo "Échec de l'opération d'insertion";
          
 }
}
header('Location: pageaccueil.php');

