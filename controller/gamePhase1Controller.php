<?php
include("../view/gamePhase1.php");
include("../controller/connexionController.php");
echo "<table>"; 
echo "<form method='POST' action='../process/getChallenger.php'>";
    echo "<tr>"; 
		
		$sql = "SELECT * 
	            FROM player
	            WHERE checked='1'";
	            $req = $connexion->query($sql);
	    echo "<td>"; 
	            
		    while($row = $req->fetch()){
		        echo "<input type='radio' name='challenger' value='".$row['pseudo']."'><span>".$row['pseudo']."<span><br>";
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

	        echo "<input type='radio' name='challenged' value='".$row['pseudo']."'><span>".$row['pseudo']."<span><br>";
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
