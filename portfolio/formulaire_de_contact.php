<?php
 require ("test_connexiondb.php");
?>

<!DOCTYPE html>


<html lang="fr">
    
    <head>
        <title>Formulaire de contact</title>
        <meta charset="utf-8">
        <link href="cssportfolio.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <! -- Menu réalisé en PHP -->
        <?php include("includes/menu.php"); ?>
        
        <h1>laissez moi un message :)</h1>
            <form method="post" action="cible_formulaire.php">
              <div class="element_de_formulaire">
      			<p>Nom :</p><input type="text" name="nom" /><br/>
              </div>
      			<p>Prénom :</p><input type="text" name="prenom" /><br/>
      			<p>Adresse mail :</p><input type="text" name="email" /><br/>
				<textarea name="message" rows="12" cols="60"> Tappez votre message ici</textarea><br/>
				<input type="submit" value="Valider" />
            </form>




         <?php include("includes/footer.html"); ?>


    </body>
</html>