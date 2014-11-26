<head>
		<link rel="stylesheet" href="./css/bootstrap.css">
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/style.css">
</head>

<table> 

    <tr>
        <th> Pseudo joueurs gagnant </th>
        <th> Date de la partie gagnée </th>
    </tr>
    
    <?php
    /*****
    * Récupération des données de la table player_win pour l'affichage des gagnants 
    * affichage uniquement de l'enregistrement du pseudo et de la date
    * pour le moment pas de limite d'affichage
    * LIMIT du 1er au 10ème résultat de la base
    * Order by date DESC pour les récup du dernier vainceur au plus ancien
    *****/
    $connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
    $sql = 'SELECT * 
            FROM player_win
            LIMIT 1, 10;
            ORDER BY date DESC';
    $req = $connexion->query($sql);
    //print_r($req);
    while($row = $req->fetch()){
        echo "<tr><td>".$row['pseudo']."</td><td>".$row['date_win']."</td></tr>";
    }

    ?>
</table>
