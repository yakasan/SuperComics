<?php

//J'ouvre ma base de donnée
		$dbname= 'SuperComics';
		$user = 'stagiaire';
		$password = 'stagiaire';
		$host = 'localhost';

	    $dbh = new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
<<<<<<< HEAD
	//print_r($_POST['checked']);
	
	
	if(isset($_POST['checked']))
	{    
		//recupérer ces valeurs dans un array
		$tabChecked = $_POST['checked'];
		
		//print_r($tabChecked);
		
		foreach ($tabChecked as $pseudo) 
		{
			$pseudoPlayer = addslashes($pseudo);
			$req = $dbh->prepare("UPDATE player 
			            SET checked ='1'
						WHERE pseudo = :pseudoPlayer");
			$req->execute(array(
			'pseudoPlayer' => $pseudoPlayer
			));
		}
	}	
	else
	{	
        header('location:../controller/createController.php');
	}
	
	header('location:../controller/createController.php');
	
	
=======
	    $dbh->exec("SET CHARACTER SET utf8");



	    /*
	     * je récupère le type et le nom du formulaire fictif : 
	     */
	    $pseudo = $dbh->quote($_POST['select']); 

	    $checked = $dbh -> exec("UPDATE player SET checked='1'");
	    
	     /* Insertion d'une ligne dans MySQL
	    $count = $dbh->exec("INSERT INTO player(pseudo, compteur) VALUES ($pseudo, $compteur)");
*/
	}		
}else{

	header('location:../controller/createController.php');}
   
header('location:../controller/createController.php');
>>>>>>> 3949ef01dc0312eff80805483796b647fd8cdf7d
?>
