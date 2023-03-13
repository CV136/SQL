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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
        ?>
    </table>
<form action="" method="post">
<label for="ville">Ville:</label>
    <input type="text" name="ville">
    <br>
    <label for="haut">Haut:</label>
    <input type="number" name="haut">
    <br>
    <label for="bas">Bas:</label>
    <input type="number" name="bas">
    <button type="submit">Envoyer</button>
    <br>
</form>
</body>
</html>