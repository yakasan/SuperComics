<?php

class SuperComics {
    public static $dns = "mysql:host=localhost; dbname=SuperComics";
	public static $user = "stagiaire";
	public static $pass = "stagiaire";
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

