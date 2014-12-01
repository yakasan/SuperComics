<?php

include("../controller/connexionController.php");
	    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//print_r($_POST['checked']);

if(isset($_POST['checked']))
{    
	//recupérer ces valeurs dans un array
	$tabChecked = $_POST['checked'];
	
	//print_r($tabChecked);
	
	foreach ($tabChecked as $pseudo) 
	{
		$pseudoPlayer = addslashes($pseudo);
		$req = $connexion->prepare("UPDATE player 
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
		$req = $connexion->prepare("UPDATE player 
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
		$req = $connexion->prepare("DELETE FROM player
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
