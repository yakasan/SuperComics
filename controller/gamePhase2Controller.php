<?php
include("../view/gamePhase2.php");
$connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');

?>


<form action='../process/nextRound.php' method='POST'>

    <div style="background-color:<?=$_SESSION['cardRandColor']?>" id="card">

        <h1> <?=$_SESSION['cardRandName']?></h1>
        <p> <?=$_SESSION['cardRandText']?></p>	
    </div>


    <table class="bord_hidden">
        <tr>
            <td>
                <input type='radio' name='playerWinner' value= "<?= $_SESSION['challenger'] ?>" > 
                <?= $_SESSION['challenger']?>
            </td>

            <td>
                <h2>
                VS
                </h2>
            </td>
            
            <td>
                <input type='radio' name='playerWinner' value="<?= $_SESSION['challenged']?>"> 
                <?= $_SESSION['challenged']?>
            </td>

        <tr>
            <td colspan="3">
                <input type="submit" value="WIN!">
            </td>
        </tr>
    </table>

</form>

<<<<<<< HEAD
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
=======
<?php include("../inc/footer.inc.php");?>
</div>
</body>
>>>>>>> 35f9b3d72231e3c0603be6360ea0fdd3a2f3428b
