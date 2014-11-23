<?php
<<<<<<< HEAD
if($_POST['pseudo']){
	
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
	    $pseudo = $dbh->quote($_POST['pseudo']); 
	    $compteur = '0'; 
	    
	    
	    
	     /* Insertion d'une ligne dans MySQL*/
	    $count = $dbh->exec("INSERT INTO player(pseudo, compteur) VALUES ($pseudo, $compteur)");

	}		
}else{

	header('location:../controller/createController.php');}
=======

	
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
    $pseudo = $dbh->quote($_POST['pseudo']); 
    $compteur = '0'; 
    
    
    
     /* Insertion d'une ligne dans MySQL*/
    $count = $dbh->exec("INSERT INTO player(pseudo, compteur) VALUES ($pseudo, $compteur)");

}

>>>>>>> 81d99414aea15d575e897b42f3ecb99a6f2932bb
   
header('location:../controller/createController.php');
?>