<?php

//J'ouvre ma base de donnée
		$dbname= 'SuperComics';
		$user = 'stagiaire';
		$password = 'stagiaire';
		$host = 'localhost';

	    $dbh = new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

print_r($_POST['challenger']);
print_r($_POST['challenged']);

if(isset($_POST['challenger'] , $_POST['challenged']))
{    
	$challenger =$_POST['challenger'];
	$challenged =$_POST['challenged'];

	if($challenger == $challenged) 
	{
		header('location:../controller/gamePhase1Controller.php');
	}
		
}else{	
    header('location:../controller/gamePhase2Controller.php');
}

?>
