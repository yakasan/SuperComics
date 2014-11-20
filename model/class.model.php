<?php

class SuperComics {
	private static $user = "stagiaire";
	private static $pass = "stagiaire";
	private static $db = "SuperComics";

<<<<<<< HEAD
		public $hasAndBelongsToMany = array(
        'User' =>
            array(
                'className' => 'User',
                'joinTable' => 'games_users',
                'foreignKey' => 'game_id',
                'associationForeignKey' => 'user_id'      
           )
    );
    
    public $playerWinTable = array(
        'playerWin' =>
            array(
                'className' => 'playerWin',
                'joinTable' => 'player',
                'foreignKey' => 'player_id',
                'associationForeignKey' => 'playerWin_id'      
           )
    );
=======
		
>>>>>>> 92c25675c7d515ef0ba4e9d142d449e0eecf502b
	function getAll() {
		$query = self::$connexion->query("SELECT * FROM ".$this->table);
		return $query;
	}

	function getBy($field, $value) {
		$query = self::$connexion->prepare("SELECT * FROM ".$this->table." WHERE `".$field."` = :value");
		$query->bindValue(":value", $value);
		$query->execute();
		return $query;
	}

	function getById($value) {
		return $this->getBy("id", $value);
	}

	function __construct() {
		if (!self::$connexion) {
			self::$connexion = new PDO('mysql:host=localhost;dbname='.self::$db.';charset=utf8', self::$user, self::$pass);
		}
	}
	
	
}

