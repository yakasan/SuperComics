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
            <form method="POST">
                <fieldset>
                    <legend class="text">Sélection de joueurs éxistants </legend>
                    
                </fieldset>
            </form>
            
>>>>>>> 81d99414aea15d575e897b42f3ecb99a6f2932bb
        </article>    
</body>
<?php include("footer.php");?>
