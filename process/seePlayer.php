<?php

<<<<<<< HEAD
include("../controller/connexionController.php");
	    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
=======
//J'ouvre ma base de donnée
		$dbname= 'SuperComics';
		$user = 'stagiaire';
		$password = 'stagiaire';
		$host = 'localhost';

	    $dbh = new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014

//print_r($_POST['checked']);

if(isset($_POST['checked']))
{    
	//recupérer ces valeurs dans un array
	$tabChecked = $_POST['checked'];
	
	//print_r($tabChecked);
	
	foreach ($tabChecked as $pseudo) 
	{
		$pseudoPlayer = addslashes($pseudo);
<<<<<<< HEAD
		$req = $connexion->prepare("UPDATE player 
=======
		$req = $dbh->prepare("UPDATE player 
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
		            SET checked ='1'
					WHERE pseudo = :pseudoPlayer");
		$req->execute(array(
		'pseudoPlayer' => $pseudoPlayer
		));
	}
}	
else if(isset($_POST['checkOut']))
{
    //recupérer ces valeurs dans un array
	$tabChecked = $_POST['checkOut'];
	
	//print_r($tabChecked);
	
	foreach ($tabChecked as $pseudo) 
	{
		$pseudoPlayer = addslashes($pseudo);
<<<<<<< HEAD
		$req = $connexion->prepare("UPDATE player 
=======
		$req = $dbh->prepare("UPDATE player 
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
		            SET checked ='0'
					WHERE pseudo = :pseudoPlayer");
		$req->execute(array(
		'pseudoPlayer' => $pseudoPlayer
		));
	}
}else if(isset($_POST['delete']))
{
    //recupérer ces valeurs dans un array
	$tabChecked = $_POST['delete'];
	
	//print_r($tabChecked);
	
	foreach ($tabChecked as $pseudo) 
	{
		$pseudoPlayer = addslashes($pseudo);
<<<<<<< HEAD
		$req = $connexion->prepare("DELETE FROM player
=======
		$req = $dbh->prepare("DELETE FROM player
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
					WHERE pseudo = :pseudoPlayer");
		$req->execute(array(
		'pseudoPlayer' => $pseudoPlayer
		));
	}
}else{	
    header('location:../controller/createController.php');
}
   
header('location:../controller/createController.php');

?>
