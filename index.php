<?php 
    include("view/header.php");

?>

<body class="index">


<body>

    <header> 
        <h1 class="typo">SuperComics L'application </h1>
        </br>
    </header>


    <section>
        
        <article class="text">Affrontez votre famille et vos amis dans des duels aussi variés que loufoques : <br>
                vitesse, adresse, connaissances, ingéniosité, mémoire... <br>
                Tous vos talents seront mis à l’épreuve. SUPER COMICS vous propose trois modes de jeux. <br>
                Avec «Héros solitaires», chacun joue à son tour. <br>
                Pour les grands groupes, formez des équipes de justiciers ou, si vous ne redoutez rien, lancez-
                vous dans le mode «Apocalypse», où tous les héros jouent EN MÊME TEMPS!!<br>
                SUPER COMICS possède sans doute le jeu avec les règles les plus simples de la planète!<br>
                1. Défiez un adversaire.<br>
                2. Retournez une carte duel et jouez! Vous ne savez jamais ce qui vous attend!<br>
                Quelques exemples?<br>
                Être le plus rapide à retirer ses bas - ses chaussettes. Fabriquer un avion en papier qui vole 
                le plus loin possible, nommer des supervilains, rédiger l’alphabet à l’envers...
        </article>


    </section>
   
     <a href="view/create.php"><input type="submit" onclick="window.location='newMess.php';" value="lancer le jeu" class="launchGameButton, typo" ></a>

    <section class="tabCenter">
    
        <?php include("view/playerWin.php");?>
        
    </section>

</body>
<?php include("view/footer.php");?>
