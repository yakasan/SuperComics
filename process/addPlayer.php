
<?php
function addplayer(){

if (isset($_POST['pseudo'])) {

    $pseudo = $_POST("pseudo");
    $connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
    $sql = 'INSERT INTO player(pseudo) 
            VALUES ($pseudo)';
    $req = $connexion->query($sql);
    //print_r($req);

    }
}
?>
