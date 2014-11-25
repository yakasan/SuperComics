<?php
include("../view/gamePhase2.php");
$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');

?>
<form action='../process/nextRound.php' method='POST'>
    <section>
    	<section class="orange">
    		<div style="background-color:<?=$_SESSION['cardRandColor']?>">

        		<h1> <?=$_SESSION['cardRandName']?></h1>
        		<p> <?=$_SESSION['cardRandText']?></p>	
    		</div>


         
        </section> 
            <aside class="player">
             
            	
            	<input type='radio' name='playerWinner' value= "<?= $_SESSION['challenger'] ?>" > 
            		<?= $_SESSION['challenger']?>
            </aside>
            <aside class="vs typo">
                VS
            </aside>
            <aside class="challenged">
          
            	

            	<input type='radio' name='playerWinner' value="<?= $_SESSION['challenged']?>"> 
            		<?= $_SESSION['challenged']?>
            </aside>

        <input type="submit" value="WIN!" class="defyButton typo" >

    </section>
</form>