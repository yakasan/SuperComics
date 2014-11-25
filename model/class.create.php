<?php

	require_once("model/class.model.php");

	class create extends SuperComics {

		function getByIdAndJoin($id){
			$query=parent::$connexion->prepare('select * FROM message INNER JOIN utilisateur on message.id_utilisateur=utilisateur.id WHERE message.id = :id;');
			$query->bindParam(":id", $id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		function selectPlayer(){
			$query=parent::$connexion->prepare('select * FROM player');
			$query->execute();
			return $connexion->query();
		}