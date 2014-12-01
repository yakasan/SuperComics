<?php
include("../controller/connexionController.php");
if (empty($_POST['playerWinner'])) {
    ?>
        <script type="text/javascript"> 
            alert('Veuillez selectionner un joueur! ');
             window.history.back(-1)
         </script>";
    <?php
}
elseif (isset($_POST['playerWinner'])) {
	$playerWinner= $_POST['playerWinner'];

    $sql = "UPDATE player SET compteur=compteur+1 WHERE pseudo='$playerWinner' ";
    $req = $connexion->query($sql);

    $req = $connexion->query("SELECT compteur FROM player WHERE pseudo='$playerWinner'");
    $row = $req->fetch();
    $compteur =$row['compteur'];

    $req =$connexion->query("SELECT max_point FROM game WHERE id='1'");
    $row =$req->fetch();
    $maxPoint = $row['max_point'];
    $id=$_SESSION['cardRandId'];
    $sql = "UPDATE card SET used=1 WHERE id= $id ";
    $req = $connexion->query($sql);
   	// var_dump($compteur);
	// var_dump($maxPoint);
    if($compteur<$maxPoint){
    ?>

    <script type="text/javascript"> 
	    alert('Le joueur <?=$playerWinner?> a gagné 1 point !!!');
	    window.location ="../controller/gamePhase1Controller.php";
    </script>

<?php 
	}else{
        
        $date_win=date("d-m-Y");
		$sql = "INSERT INTO player_win (pseudo , date_win ) VALUES ('$playerWinner', '$date_win') ";
    	$req = $connexion->query($sql);
        

    	
		$_SESSION['playerWinner']=$playerWinner;
		header('location:../controller/finalController.php');
	}
}
?>