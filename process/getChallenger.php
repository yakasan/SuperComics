<?php

//J'ouvre ma base de donnée
		$dbname= 'SuperComics';
		$user = 'stagiaire';
		$password = 'stagiaire';
		$host = 'localhost';

	    $connexion = new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
	    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//print_r($_POST['challenger']);
//print_r($_POST['challenged']);
if (empty($_POST['challenger']) || empty($_POST['challenged'])) {
	?>
	    <script type="text/javascript"> 
	        alert('Probleme de selection des joueurs! \n Veuillez selectionner deux joueurs differents');
	         window.history.back(-1)
         </script>";
	<?php
}

if (isset($_POST['challenger']) && isset($_POST['challenged'])) {
	$challenger =$_POST['challenger'];
	$challenged =$_POST['challenged'];

	if ($challenger == $challenged)
	{
			
	?>
	    <script type="text/javascript"> 
	        alert('Probleme de selection des joueurs! \n Veuillez selectionner deux joueurs differents');
	         window.history.back(-1)
         </script>";
	<?php
	}

else{	
	session_start ();

	$req = $connexion->query("SELECT MAX(id) FROM card WHERE used='0';");
	$idMax=$req->fetchAll(PDO::FETCH_ASSOC);
	$idMax=$idMax[0];
    $_SESSION['idMax']=$idMax['MAX(id)'];
    //print_r($idMax);
    
    $req = $connexion->query("SELECT * FROM card WHERE used='0' AND id= ROUND(RAND() * ".$_SESSION['idMax'].")+1 ");
    //$cardRand=$req->fetchAll(PDO::FETCH_ASSOC);
    $row = $req->fetch();
    //print_r($row);
    if (empty($row)){
        header('location:../process/getChallenger.php');
    }else{
        $_SESSION['cardRandId']=$row['id'];
        $_SESSION['cardRandName']=utf8_encode($row['name']);
        $_SESSION['cardRandText']=utf8_encode($row['text']);
        $_SESSION['cardRandColor']=$row['color'];
     
    }


	$_SESSION['challenger'] = $challenger;
	$_SESSION['challenged'] = $challenged;

		
	    header('location:../controller/gamePhase2Controller.php');
	}
}
?>
