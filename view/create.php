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
            
            <form method="POST">
                <fieldset>
                    <legend class="text">Sélection de joueurs éxistants </legend>
                    
                </fieldset>
            </form>
            
        </article>    
</body>
<?php include("footer.php");?>
