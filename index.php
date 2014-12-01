<body>
<?php include("inc/header.inc.php");?>

<div id="header">
    <header> 
        <h1 class="typo">SuperComics L'application </h1>
        </br>
    </header>
</div>

<?php include("inc/nav_index.inc.php");?>
        
        
<div id="content">
    <p class="text">Affrontez votre famille et vos amis dans des duels aussi variés que loufoques : <br>
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
    </p>

    <input type="submit" onclick="window.location='controller/createController.php';" value="lancer le jeu" class="launchGameButton, typo" >
<?php include("inc/playerWin.inc.php");?>

        <?php include("inc/footer_index.inc.php");?>




