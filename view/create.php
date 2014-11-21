<?php include("../inc/header.inc.php");?>
<body>
    <header> 
        <h1>A qui de jouer ?</h1>
        </br>
    </header>


    <section>

        <article >
            <form action="createController.php" method="POST">
                <fieldset>
                    <legend class="text">Ajout de joueurs </legend>
                    <label for="pseudo"class="text"> Pseudo </label>
                    <input type="text" id="pseudo" name="pseudo">
                    <input type="submit" value="ajouter">
                </fieldset>
            </form>
            
            <form method="POST">
                <fieldset>
                    <legend class="text">Sélection de joueurs éxistants </legend>
                    
                    <input type="submit" value="Sélectionner">
                </fieldset>
            </form>
            
        </article>
        
        <section class="tabCenter">
            <table class="text">
                <tr>
                    <td>Joueur X </td>
                    <td>Pseudo X </td>
                </tr>
            </table>
        </section class="tabCenter">
        <a href="gamePhase1.php"><input type="submit" value="Alors, on joue?" class="launchGameButton" ></a>

    </section>
   
        
</body>
<?php include("footer.php");?>
