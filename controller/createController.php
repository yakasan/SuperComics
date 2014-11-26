<?php
include("../view/create.php");

	$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
    $sql = 'UPDATE player SET compteur=0';
    $req = $connexion->query($sql);
    $sql = 'SELECT * 
            FROM player';
    $req = $connexion->query($sql);
    //print_r($req);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 35f9b3d72231e3c0603be6360ea0fdd3a2f3428b

?>
>>>>>>> 81ca1d2ba9b12fa8b08e84aded644e32ad46f0b0

?>

    <form method="POST" action="../process/seePlayer.php">
        <fieldset>
            <legend class="text">Sélection des joueurs</legend>
        <?php      
		    $i=0;
	        while($row = $req->fetch()){
	            echo "<input type='checkbox' name='checked[".$row['pseudo']."]' value='".$row['pseudo']."'><span>".$row['pseudo']."</span>";
	        }
        ?>

<<<<<<< HEAD
        <input type='submit' value='Sélection'>
        </fieldset>
    </form>
=======
<form method="POST" action="../process/seePlayer.php">
    <fieldset>
        <legend class="text">Supression de joueurs</legend>
    <?php      
		$sql = "SELECT * 
                FROM player";
                $req = $connexion->query($sql);
                
	    while($row = $req->fetch()){
	        echo "<input type='checkbox' name='delete[".$row['pseudo']."]' value='".$row['pseudo']."'>".$row['pseudo'];
	    }
    ?>
>>>>>>> 81ca1d2ba9b12fa8b08e84aded644e32ad46f0b0

    <form method="POST" action="../process/seePlayer.php">
        <fieldset>
            <legend class="text">Supression de joueurs</legend>
        <?php      
		    $sql = "SELECT * 
                    FROM player";
                    $req = $connexion->query($sql);
                    
	        while($row = $req->fetch()){
	            echo "<input type='checkbox' name='delete[".$row['pseudo']."]' value='".$row['pseudo']."'><span>".$row['pseudo']."</span>";
	        }
        ?>

        <input type='submit' value='Suppression'>
        </fieldset>
    </form>

    <form method="POST" action="../process/seePlayer.php">
        <table class="text">
            <tr>
                <th>Joueur n° </th>
                <th>Pseudo </th>
                <th>Supprimer Joueur</th>
            </tr>
            
            <?php
            
                $sql = "SELECT * 
                FROM player
                WHERE checked='1'";
                $req = $connexion->query($sql);
                //print_r($req);
                $i=1;
                while($row = $req->fetch()){
                    echo "<tr><td>Joueur ".$i."</td><td>".$row['pseudo']."</td> <td> <input type='checkbox' name='checkOut[".$row['pseudo']."]' value='".$row['pseudo']."'></td></tr> ";
                    $i++;
                }
            
            ?>
            <tr>
                <td colspan="3"> 
                    <input type='submit' value='Déselection' >
    </form> 
                    <input type="button" value="Alors, on joue?"  onclick="window.location='../controller/gamePhase1Controller.php'" class="launchGameButton" >
                </td>
            </tr>
        </table>
<<<<<<< HEAD
    </form>
</section class="tabCenter">
<section>
    <form action="../process/maxPoint.php" method="POST">
        <fieldset>
            <legend class="text">Modification du nombre de manches</legend>
            <label for="pseudo"class="text"> Nombre de manches gagantes  </label>
            <input type="text" id="max_point" name="max_point">
            <input type="submit" value="Modifier">
        </fieldset>
    </form>
</section>
<a href="../controller/gamePhase1Controller.php"><input type="submit" value="Alors, on joue?" class="launchGameButton" ></a>
=======
    
        
    
    <?php include("../inc/footer.inc.php");?>
</div>
>>>>>>> 35f9b3d72231e3c0603be6360ea0fdd3a2f3428b

</body>

