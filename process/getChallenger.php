<?php

//J'ouvre ma base de donnée
		$dbname= 'SuperComics';
		$user = 'stagiaire';
		$password = 'stagiaire';
		$host = 'localhost';

	    $dbh = new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//print_r($_POST['challenger']);
//print_r($_POST['challenged']);

if(isset($_POST['challenger'] , $_POST['challenged']))
{    
	$challenger =$_POST['challenger'];
	$challenged =$_POST['challenged'];

	if($challenger == $challenged) 
	{
	?>
	    <script type="text/javascript"> 
	        alert('Probleme de selection des joueurs! \n Veuillez selectionner deux joueurs differents');
	         window.history.back(-1)
         </script>";
	<?php
	}

}else{	
    header('location:../controller/gamePhase2Controller.php');
}

?>
