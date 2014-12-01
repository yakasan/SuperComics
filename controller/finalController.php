<?php

include("../controller/connexionController.php");
include("../view/final.php");
	$sql = "UPDATE card SET used=0";
	$req = $connexion->query($sql);
	session_destroy();
?>	