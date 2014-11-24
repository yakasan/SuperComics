<?php include("../inc/header.inc.php");?>
<body>
    <header> 
        <h1>A qui de jouer ?</h1>
        </br>
    </header>


    <section>

        <article >
            <form action="../process/addPlayer.php" method="POST">
                <fieldset>
                    <legend class="text">Ajout de joueurs </legend>
                    <label for="pseudo"class="text"> Pseudo </label>
                    <input type="text" id="pseudo" name="pseudo">
                    <input type="submit" value="ajouter">
                </fieldset>
            </form>
            
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f4b57947cfa110175bf06b353035d491f4c0c521
            <form method="POST">
                <fieldset>
                    <legend class="text">Sélection de joueurs éxistants </legend>
                    
                </fieldset>
            </form>
            
<<<<<<< HEAD
        </article>    
=======
<<<<<<< HEAD
        </article>
        
        <section class="tabCenter">
            <table class="text">
                <tr>
                    <td>Joueur X </td>
                    <td>Pseudo X </td>
                </tr>
            </table>
        </section class="tabCenter">
        <a href="gamePhase1Controller.php"><input type="submit" value="Alors, on joue?" class="launchGameButton" ></a>

    </section>
   
        
=======
>>>>>>> 81d99414aea15d575e897b42f3ecb99a6f2932bb
        </article>    
>>>>>>> 81d2a0eeb87a60455a5a10e5242e8f1ba8a03900
>>>>>>> f4b57947cfa110175bf06b353035d491f4c0c521
</body>
<?php include("footer.php");?>
