<?php include("header.php");?>
<body>
    <header> 
        <h1>A qui de jouer ?</h1>
        </br>
    </header>


    <section>
        
        <article >
            <form method="get">
                <fieldset>
                    <legend class="text"> De 3 à 8 joueurs </legend>
                    <label for="pseudo"class="text"> Pseudo
                    <input type="text" id="pseudo" name="pseudo">
                    <input type="submit" value="ajouter>">
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

    </section>
   
        
</body>
<?php include("footer.php");?>
