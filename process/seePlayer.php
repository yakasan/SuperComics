<?php
if($_POST['checked']){
	
	if(!empty($_POST)){

		//J'ouvre ma base de donnée
		$dbname= 'SuperComics';
		$user = 'stagiaire';
		$password = 'stagiaire';
		$host = 'localhost';

	    $dbh = new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $dbh->exec("SET CHARACTER SET utf8");



	    /*
	     * je récupère le type et le nom du formulaire fictif : 
	     */
	    $pseudo = $dbh->quote($_POST['select']); 

	    $checked = $dbh -> exec("UPDATE player SET checked='1'");
	    
	     /* Insertion d'une ligne dans MySQL
	    $count = $dbh->exec("INSERT INTO player(pseudo, compteur) VALUES ($pseudo, $compteur)");
*/
	}		
}else{

	header('location:../controller/createController.php');}
   
header('location:../controller/createController.php');
?>
