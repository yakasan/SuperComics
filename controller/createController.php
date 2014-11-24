<?php
include("../view/create.php");

	$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
    $sql = 'SELECT * 
            FROM player';
    $req = $connexion->query($sql);
    //print_r($req);

<<<<<<< HEAD
=======
<<<<<<< HEAD
?>

<form method="POST">
    <fieldset>
        <legend class="text">Sélection des joueurs</legend>
    <?php      
		$i=0;
	    while($row = $req->fetch()){
	        echo "<input type='checkbox' name='".$row['pseudo']."' value='.$i.'>".$row['pseudo'];
	        $i++;
	    }
    ?>

    <input type='submit' value='select'>
    </fieldset>
</form>

<section class="tabCenter">
    <table class="text">
        <tr>
            <td>Joueur X </td>
            <td>Pseudo X </td>
        </tr>
    </table>
</section class="tabCenter">
<a href="gamePhase1.php"><input type="submit" value="Alors, on joue?" class="launchGameButton" ></a>
=======


>>>>>>> f4b57947cfa110175bf06b353035d491f4c0c521
echo"<form>";
	$i=0;
    while($row = $req->fetch()){
        echo "<input type='checkbox' name='".$row['pseudo']."' value='.$i.'>".$row['pseudo'];
        $i++;
    }
<<<<<<< HEAD
    echo"<input type='submit' value='Sélectionner'>";
echo"</form>";

=======

    echo"<input type='submit' value='Sélectionner'>";
echo"</form>";


>>>>>>> f4b57947cfa110175bf06b353035d491f4c0c521
?>

<section class="tabCenter">
	    <table class="text">
	        <tr>
	            <td>Joueur X </td>
	            <td>Pseudo X </td>
	        </tr>
	    </table>
	</section class="tabCenter">
	<a href="gamePhase1.php"><input type="submit" value="Alors, on joue?" class="launchGameButton" ></a>
<<<<<<< HEAD
=======
>>>>>>> 81d99414aea15d575e897b42f3ecb99a6f2932bb
>>>>>>> f4b57947cfa110175bf06b353035d491f4c0c521

</section>

