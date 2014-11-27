<?php
include("../view/final.php");
	$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
	$sql = "UPDATE card SET used=0";
	$req = $connexion->query($sql);
?>	