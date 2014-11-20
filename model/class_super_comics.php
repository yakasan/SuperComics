<?php

class SuperComics {
	private static $user = "stagiaire";
	private static $pass = "stagiaire";
	private static $db = "SuperComics";

		public $hasAndBelongsToMany = array(
        'User' =>
            array(
                'className' => 'User',
                'joinTable' => 'games_users',
                'foreignKey' => 'game_id',
                'associationForeignKey' => 'user_id'      
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

