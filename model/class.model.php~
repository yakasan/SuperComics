<?php

class SuperComics {
    public static $dns = "mysql:host=localhost; dbname=SuperComics";
	public static $user = "stagiaire";
	public static $pass = "stagiaire";
    $connexion = new PDO ($dns, $user, $pass);
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
    
    public $playerWinTable = array(
        'playerWin' =>
            array(
                'className' => 'playerWin',
                'joinTable' => 'player',
                'foreignKey' => 'player_id',
                'associationForeignKey' => 'playerWin_id'      
           )
    );

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

