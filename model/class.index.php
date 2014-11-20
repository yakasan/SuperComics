<?php

require_once("model/class.model.php");

class Index extends SuperComics {
	protected $tableWin = "tableWin";

	function getPlayerWin() {
		$result= parent::$connexion->query("SELECT * FROM playerWin INNER JOIN player ON playerWin.id_player = player.id;");
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	function getByIdAndJoin($id){
		$query=parent::$connexion->prepare('select * FROM message INNER JOIN utilisateur on message.id_utilisateur=utilisateur.id WHERE message.id = :id;');
		$query->bindParam(":id", $id);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	}
	
?>
