<body>
<?php 


//var_dump($_SESSION['playerWinner']); 
include("../inc/header.inc.php");
?>

<div id="header">
    <header> 
        <h1 class="typo">SuperComics L'application </h1>
        </br>
    </header>
</div>
<?php include("../inc/nav.inc.php");?>

<div id="content">
    <h2> LE JOUEUR </h2>
    <h1> <?= $_SESSION['playerWinner']?> </h1>
    <h2>REMPORTE LA PARTIE </h2>

    <input type='button' value='NOUVELLE PARTIE' onClick="location.href='../controller/createController.php'" > 

    <input type='button' value='RETOUR INDEX' onClick="location.href='../index.php'" > 
</div>

</body>
