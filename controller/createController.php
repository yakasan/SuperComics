<?php
include("../view/create.php");

	$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
    $sql = 'SELECT * 
            FROM player';
    $req = $connexion->query($sql);
    //print_r($req);

?>

<form method="POST" action="../process/seePlayer.php">
    <fieldset>
        <legend class="text">Sélection des joueurs</legend>
    <?php      
		$i=0;
	    while($row = $req->fetch()){
	        echo "<input type='checkbox' name='checked[".$row['pseudo']."]' value='".$row['pseudo']."'>".$row['pseudo'];
	    }
    ?>

    <input type='submit' value='checked'>
    </fieldset>
</form>


<section class="tabCenter">
    <table class="text">
        <tr>
            <td>Joueur n° </td>
            <td>Pseudo </td>
        </tr>
        
        <?php
        
            $sql = "SELECT * 
            FROM player
            WHERE checked='1'";
            $req = $connexion->query($sql);
            //print_r($req);
            $i=1;
            while($row = $req->fetch()){
                echo "<tr><td>Joueur ".$i."</td><td>".$row['pseudo']."</td></tr>";
                $i++;
            }
        
        ?>
    </table>
</section class="tabCenter">
<a href="../controller/gamePhase1Controller.php"><input type="submit" value="Alors, on joue?" class="launchGameButton" ></a>

</section>

