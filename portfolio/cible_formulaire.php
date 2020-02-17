<?php
 require ("test_connexiondb.php"); 

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$message=$_POST['message'];


if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['message']))
{
	echo "Bonjour " . htmlspecialchars($_POST['prenom']) . " " . htmlspecialchars($_POST['nom']). "<br/>";
	echo "nous avons bien reçu votre message, nous vous répondrons dans les plus brefs délais !<br/><br/>";
	echo "Merci et bonne journée !";

	$data = $dbh->prepare('INSERT INTO formulaire_contact (nom, prenom, email, message) VALUES (:nom, :prenom, :email, :message)');
	$data -> bindParam(':nom', $nom , PDO::PARAM_STR, 255);
	$data -> bindParam(':prenom', $prenom , PDO::PARAM_STR, 255);
	$data -> bindParam(':email', $email , PDO::PARAM_STR, 255);
	$data -> bindParam(':message', $message , PDO::PARAM_STR, 255);
	$data -> execute();
}

else 
{
  echo "Vous n'avez pas renseigner tous les éléments du formulaire (Nom, Prénom, Email, Message) ! <br/><br/>";
}






echo htmlspecialchars($_POST['message']);
?>

<p> Pour retourner à la page précédente : <a href="formulaire_de_contact.php">Cliquez ici !</a>
    

