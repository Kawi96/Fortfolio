<?php 





if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['message']))
{
	echo "Bonjour " . htmlspecialchars($_POST['prenom']) . " " . htmlspecialchars($_POST['nom']). "<br/>";
	echo "nous avons bien reçu votre message, nous vous répondrons dans les plus brefs délais !<br/><br/>";
	echo "Merci et bonne journée !";
}

else 
{
  echo "Vous n'avez pas renseigner tous les éléments du formulaire (Nom, Prénom, Email, Message) ! <br/><br/>";
}



//try {
	//$bdd = new PDO ('mariadb:host=localhost;dbname=portfolio;charset=utf8', 'root', '');

//};
//catch (Exception $message_erreur) {
 //die('Erreur :' . $$message_erreur());
//};


echo htmlspecialchars($_POST['message']);
?>

<p> Pour retourner à la page précédente : <a href="formulaire_de_contact.php">Cliquez ici !</a>
    

