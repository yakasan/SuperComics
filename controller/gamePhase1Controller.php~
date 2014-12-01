<?php
include("../view/gamePhase1.php");
$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
echo "<table>"; 
echo "<form method='POST' action='../process/getChallenger.php'>";            
    echo "<tr>"; 
		
		$sql = "SELECT * 
	            FROM player
	            WHERE checked='1'";
	            $req = $connexion->query($sql);
	    echo "<td>"; 
	            
			    while($row = $req->fetch()){
<<<<<<< HEAD
			        echo "<input type='radio' name='challenger' value='".$row['pseudo']."'><span>".$row['pseudo']."<span><br>";
=======
			        echo "<input type='radio' name='challenger' value='".$row['pseudo']."'>".$row['pseudo']."<br>";
>>>>>>> 81ca1d2ba9b12fa8b08e84aded644e32ad46f0b0
			   }
	    echo "</td>"; 
	    
	    echo "<td>";
	    	echo"<h2>VS</h2>";
	    echo "</td>";
	    
	    echo "<td>";
	   $sql = "SELECT * 
            FROM player
            WHERE checked='1'";
            $req = $connexion->query($sql);
	   while($row = $req->fetch()){
<<<<<<< HEAD
	        echo "<input type='radio' name='challenged' value='".$row['pseudo']."'><span>".$row['pseudo']."<span><br>";
=======
	        echo "<input type='radio' name='challenged' value='".$row['pseudo']."'>".$row['pseudo']."<br>";
>>>>>>> 81ca1d2ba9b12fa8b08e84aded644e32ad46f0b0
	   }
       echo "</td>";  
    echo "</tr>";
    echo "<tr> <td colspan='3'> <input type='submit' value='Défier!'></td></tr>";
echo "</form>";
echo "</table>"; 	
?>

<?php include("../inc/footer.inc.php");?>
</div>
</body>
