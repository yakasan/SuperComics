<?php
	
	$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
	$pseudo = $connexion->quote($_SESSION['pseudo']); 
    $sql = 'UPDATE player SET compteur= compteur+1 WHERE pseudo=$pseudo ';
    header('location:../controller/gamePhase2Controller.php');

    ?>