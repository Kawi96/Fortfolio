<?php

require ("test_connexiondb.php"); 

$reponse = $dbh->query('SELECT * FROM articles');
;


while ($donnees = $reponse->fetch())
{
    ?><h1><?php echo $donnees['titre'];?></h1><?php
    ?><p><?php echo $donnees['image'];?></p><?php
    ?><p><?php echo $donnees['avantages'];?></p><?php
    ?><p><?php echo $donnees['inconvenients'];?></p><?php
}



?>