<?php 
session_start();
//var_dump($_SESSION['playerWinner']); ?>

<h1> LE JOUEUR </h1>
<h1> <?= $_SESSION['playerWinner']?> </h1>
<h1>REMPORTE LA PARTIE </h1>

<input type='button' value='NOUVELLE PARTIE' onClick="location.href='../controller/createController.php'" > 

<input type='button' value='RETOUR INDEX' onClick="location.href='../index.php'" > 
