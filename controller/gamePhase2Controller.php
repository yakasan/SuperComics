<?php
include("../view/gamePhase2.php");
include("../controller/connexionController.php");

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

                <?php       print_r($_SESSION['cardRandId']); ?>
            </td>
        </tr>
    </table>

</form>

    <form>
        <script type="text/javascript">
            function timer(){
                var clock;

                $(document).ready(function() {

                    clock = new FlipClock($('.clock'), {
                        clockFace: 'Counter',
                        autoStart: true
                    });
                    clock.setTime(30);

                    clock.setCountdown(true);
                });
            }
        </script>
        <div class="clock" style="margin:2em;">
			<INPUT TYPE="button" VALUE="Timer 30 secondes" onClick="timer()">
        </div>
    </form> 

</form>

<?php include("../inc/footer.inc.php");?>
</div>
</body>

