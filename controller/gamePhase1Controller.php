<?php
include("../view/gamePhase1.php");
include("/SuperComics/model/class.model.php");

echo "<table>"; 
echo "<form method='POST' action='../process/getChallenger.php'>";            
    echo "<tr>"; 
		$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
		$sql = "SELECT * FROM player WHERE checked='1'";
	    $req = $connexion->query($sql);
	    echo "<td>"; 
	            
			    while($row = $req->fetch()){
			        echo "<input type='radio' name='challenger' value='".$row['pseudo']."'>".$row['pseudo']."<br>";
			   }
	    echo "</td>"; 
	    echo "<td>";
	    	echo"VS";
	    echo "</td>";
	    echo "<td>";
		$sql = "SELECT * FROM player WHERE checked='1'";
		$req = $connexion->query($sql);
		while($row = $req->fetch()){
			echo "<input type='radio' name='challenged' value='".$row['pseudo']."'>".$row['pseudo']."<br>";
		}
		echo "</td>";  
    echo "</tr>";
    echo "<tr> <td collspan='3'> <input type='submit' value='Défier!'></td></tr>";
echo "</form>";
echo "</table>"; 	
?>