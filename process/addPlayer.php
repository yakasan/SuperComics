<?php
if($_POST['pseudo']){
	
	if(!empty($_POST)){

		//J'ouvre ma base de donnée
		$dbname= 'SuperComics';
<<<<<<< HEAD
		$user = 'root';
		$password = 'Guizmo79260';
		$host = 'localhost';

=======
		$user = 'stagiaire';
		$password = 'stagiaire';
		$host = 'localhost';

	    $connexion = new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
	    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $connexion->exec("SET CHARACTER SET utf8");

	    /*
	     * je récupère le type et le nom du formulaire fictif : 
	     */
	    $pseudo = $connexion->quote($_POST['pseudo']); 
	    $pseudo= ucwords($pseudo);
	    $pseudo = str_replace(" ", "",$pseudo);
	    $compteur = '0'; 

	     /* Insertion d'une ligne dans MySQL*/
	    $count = $connexion->exec("INSERT INTO player(pseudo, compteur) VALUES ($pseudo, $compteur)");

	}		
}else{

	header('location:../controller/createController.php');}
   
header('location:../controller/createController.php');
?>
