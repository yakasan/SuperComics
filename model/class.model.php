<?php

class SuperComics {
    public static $dns = "mysql:host=localhost; dbname=SuperComics";
<<<<<<< HEAD
	public static $user = "root";
	public static $pass = "Guizmo79260";
=======
	public static $user = "stagiaire";
	public static $pass = "stagiaire";
>>>>>>> 2ac8d82dd1249e45faa0201a8ad795a3251fa014
    $connexion = new PDO($dns, $user, $pass);
// model pour jointure de tables, a conserver
	/*public $hasAndBelongsToMany = array(
        'User' =>
            array(
                'className' => 'User',
                'joinTable' => 'games_users',
                'foreignKey' => 'game_id',
                'associationForeignKey' => 'user_id'      
           )
    );*/
 

}

