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
        
        <!-- Menu réalisé en PHP -->
        <?php include("includes/menu.php"); ?>
        
        <h1>laissez moi un message :)</h1>
            <form method="POST" action="cible_formulaire.php">
              <div class="element_de_formulaire">
      			<p>Nom :</p><input type="text" name="nom" /><br/>
              </div>
              <div class="element_de_formulaire">
      			<p>Prénom :</p><input type="text" name="prenom" /><br/>
              </div>
              <div class="element_de_formulaire">
      			<p>Adresse mail :</p><input type="text" name="email" /><br/>
              </div>
				<textarea name="message" rows="12" cols="60"> Tappez votre message ici</textarea><br/>
				<input type="submit" value="Valider" />
            </form>


          <footer>
           <?php include("includes/footer.html"); ?>
          </footer>


    </body>
</html>