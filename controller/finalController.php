<?php
<<<<<<< HEAD

include("../controller/connexionController.php");
include("../view/final.php");
	$sql = "UPDATE card SET used=0";
	$req = $connexion->query($sql);
	session_destroy();
=======
include("../view/final.php");
	$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
	$sql = "UPDATE card SET used=0";
	$req = $connexion->query($sql);
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
?>	