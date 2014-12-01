<?php
<<<<<<< HEAD
	session_start();

    	$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'root', 'Guizmo79260');

=======
    $bdd = 'mysql:host=localhost;dbname=SuperComics';
    $user = 'stagiaire';
    $mdp = 'stagiaire';
    $connection = new PDO( $bdd, $user, $mdp );
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
?>
