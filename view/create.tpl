
<?php include("view/header.php");?>
<body>
    <header> 
        <h1>A qui de jouer ?</h1>
        </br>
    </header>


    <section>
        
        <article >
            <form method="get">
                <fieldset>
                    <legend class="text">Ajout de joueurs </legend>
                    <label for="pseudo"class="text"> Pseudo </label>
                    <input type="text" id="pseudo" name="pseudo">
                    <input type="submit" value="ajouter">
                </fieldset>
            </form>
            
            <form method="get">
                <fieldset>
                    <legend class="text">Sélection de joueurs éxistants </legend>
                    <select>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
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
        <a href="gamePhase1.tpl"><input type="submit" value="Alors, on joue?" class="launchGameButton" ></a>

    </section>
   
        
</body>
<?php include("footer.php");?>
