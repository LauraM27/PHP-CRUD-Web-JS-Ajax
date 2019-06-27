<?php
// Il s'agit de la classe de management de la classe User.
// Ici seul 2 �thodes sont impl�ment�es
class UserManager {
	
	static public function add(User $perso) {
		$db = DbConnect::getDb (); // Instance de PDO.
		                          // Préparation de la requête d'insertion.
		$q = $db->prepare ( 'INSERT INTO users(Pseudo, Password, Role) VALUES(:pseudo, :password, :role)' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':pseudo', $perso->getPseudo () );
		$q->bindValue ( ':password', $perso->getPassword () );
		$q->bindValue ( ':role', $perso->getRole () );
		
		// Exécution de la requête.
		$q->execute ();
		$q->CloseCursor ();
	}
	
	static public function getByPseudo($pseudo) {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT Pseudo, Password, IdUser, Role FROM users WHERE Pseudo = :pseudo' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':pseudo', $pseudo );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new User ();
		} else {
			return new User ( $donnees );
		}
	}
}