<?php

//J'ouvre ma base de donnée
	$dbname= 'SuperComics';
	$user = 'stagiaire';
	$password = 'stagiaire';
	$host = 'localhost';

    $connexion = new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
        header('location:../process/addCard.php');
    }else{
        $_SESSION['cardRandId']=$row['id'];
        $_SESSION['cardRandName']=$row['name'];
        $_SESSION['cardRandText']=$row['text'];
        $_SESSION['cardRandColor']=$row['color'];
    }
    //print_r($_SESSION['cardRandId']."     ".$_SESSION['cardRandName']."   ".$_SESSION['cardRandText']."   ".$_SESSION['cardRandColor']);
    
    /*$req = $connexion->query("UPDATE card SET use=1 WHERE".$cardRandId);
    $idRand=$req;*/
		
?>
