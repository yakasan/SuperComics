<?php
<<<<<<< HEAD
include("../controller/connexionController.php");
=======
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
if($_POST['max_point']){
	
	if(!empty($_POST)){

<<<<<<< HEAD
		
=======
		//J'ouvre ma base de donnée
		$dbname= 'SuperComics';
		$user = 'stagiaire';
		$password = 'stagiaire';
		$host = 'localhost';

	    $connexion = new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
	    
	    $max_point = $_POST['max_point']; 

	     /* Insertion d'une ligne dans MySQL*/
	   // $count = $connexion->exec("INSERT INTO game(max_point) VALUES ($max_point)");
		$sql = "UPDATE game SET max_point='$max_point' WHERE id='1' ";
   		$req = $connexion->query($sql);
	}		
}else{

	header('location:../controller/createController.php');}
   
header('location:../controller/createController.php');
?>
