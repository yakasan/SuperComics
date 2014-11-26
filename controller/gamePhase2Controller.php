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
    
    <FORM>
<script type="text/javascript">
    function timer(){
            var clock;

            $(document).ready(function() {

                clock = new FlipClock($('.clock'), {
                    clockFace: 'Counter',
                    autoStart: true
                });
                clock.setTime(5);

                clock.setCountdown(true);
            })alert("FINI TOCARD")
            ;
}
        </script>
        <INPUT TYPE="button" VALUE="Timer 30 secondes" onClick="timer()">
    
    </FORM> 
    <div class="clock" style="margin:2em;">

    </div>

</form>