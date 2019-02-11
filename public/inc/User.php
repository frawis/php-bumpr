<?php
/**
 * User Class
 * User: fwissink
 * Date: 11.02.2019
 * Time: 17:18
 */

class User {
	private $connection;
	private $tabelle = "t_users";

	public $id;
	public $benutzername;
	public $passwort;
	public $vorname;
	public $nachname;
	public $email;

	public function __construct( $connection ) {
		$this->connection = $connection;
	}

	public function anmelden( $benutzer ) {
		$query = "SELECT * FROM t_users WHERE benutzername = ?";
		$stmt  = $this->connection->prepare( $query );
		$stmt->execute( array( ":benutzername" => $benutzer ) );
		$data = $stmt->fetch( PDO::FETCH_ASSOC );
		return $data;
	}

//	public function registrieren( array $benutzer ){
//		$query = "INSERT INTO" . this->$this->tabelle . "(benutzername, password, vorname, nachname, email) VALUES (?,?,?,?,?)";
//		$stmt = $this->connection->prepare( $query );
//
//	}
}