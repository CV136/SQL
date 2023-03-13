<?php
try
{
	
	$bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	
        die('Erreur : '.$e->getMessage());
}

$resultat = $bd->query('SELECT * FROM meteo');

$donnees = $resultat->fetch();

while ($donnees = $resultat->fetch())
{
  echo $donnees['nom_de_la_colonne'];
}

$resultat->closeCursor();