<?php
include("../view/create.php");

$pseudo = $_POST["pseudo"];
function addplayer($pseudo){
if (isset($pseudo)) {
   
    $connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
    $sql = 'INSERT INTO player (pseudo) 
            VALUES ('.$pseudo.')';
    $req = $connexion->query($sql);
    //print_r($req);

    }
}

?>

