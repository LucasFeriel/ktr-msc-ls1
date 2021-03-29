<?php



try
{
	 $pdo = new PDO("mysql:host=localhost;dbname=Epitech","root","");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST["username"]))
{
$username = $_POST['username'];
$mdp = $_POST['mdp'];


 $requete="INSERT INTO utilisateurs(username, mdp) 
 						VALUES(:username, :mdp)"; 
 						$res = $pdo->prepare($requete);
  $exec = $res->execute(array(":username"=>$username,":mdp"=>$mdp));
 					
if($exec){
    echo 'Données insérées';
  }else{
    echo "Échec de l'opération d'insertion";
          
 }
}
header('Location: index.php');

