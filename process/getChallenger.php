<?php
<<<<<<< HEAD
include("../controller/connexionController.php");


=======

//J'ouvre ma base de donnée
		$dbname= 'SuperComics';
		$user = 'stagiaire';
		$password = 'stagiaire';
		$host = 'localhost';

	    $connexion = new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
	    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//print_r($_POST['challenger']);
//print_r($_POST['challenged']);
if (empty($_POST['challenger']) || empty($_POST['challenged'])) {
	?>
	    <script type="text/javascript"> 
	        alert('Veuillez selectionner deux joueurs! ');
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
<<<<<<< HEAD
    print_r($row['id']);
=======
    //print_r($row);
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
    if (empty($row)){
        header('location:../process/getChallenger.php');
    }else{
        $_SESSION['cardRandId']=$row['id'];
        $_SESSION['cardRandName']=utf8_encode($row['name']);
        $_SESSION['cardRandText']=utf8_encode($row['text']);
        $_SESSION['cardRandColor']=$row['color'];
		
		$cardName=$_SESSION['cardRandName'] ; 
		$sql ="UPDATE card SET used=1 WHERE name='$cardName'";
		$req = $connexion->query($sql);
     
    }


	$_SESSION['challenger'] = $challenger;
	$_SESSION['challenged'] = $challenged;

		
	    header('location:../controller/gamePhase2Controller.php');
	}
}
?>
