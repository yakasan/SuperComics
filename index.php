<?php include("view/header.php");?>
<<<<<<< HEAD
<body class="index">

=======
<body>
>>>>>>> d64b94a013d48200dca7e20f5089ecc836bdd5e3
    <header> 
        <h1>SuperComics L'application </h1>
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
<<<<<<< HEAD
=======
        <aside>
            <img src="img/supcom.jpg" class="supcom">
        </aside>
>>>>>>> d64b94a013d48200dca7e20f5089ecc836bdd5e3

    </section>
    <section>
        <table> 
            <tr>
                <td> Pseudo joueurs gagnant</td>
                <td> Date de la partie gagnée</td>
            </tr>
            <?php
            foreach ($playerWinner as $key => $value) {
                echo "<tr><td>".$value;
             } 
            ?>
            
        </table>
    </section>
    

     <a href="view/create.php"><input type="submit" value="lancer le jeu" class="launchGameButton" ></a>
        
</body>
<?php include("view/footer.php");?>
