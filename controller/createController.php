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
    
        
    
    <?php include("../inc/footer.inc.php");?>
</div>

</body>

