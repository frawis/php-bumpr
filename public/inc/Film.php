<?php
/**
 * Film Class
 * User: fwissink
 * Date: 11.02.2019
 * Time: 17:31
 */

class Film {
	private $connection;
	private $tabelle = "t_filme";

	public $titel;
	public $jahre;
	public $laenge;
	public $genre;
	public $gesehen;
	public $vorhanden;

	public function __construct( $connection ) {
		$this->connection = $connection;
	}

	public function lesen() {
		$query = "SELECT * FROM " . $this->tabelle;
		$stmt  = $this->connection->prepare( $query );
		$stmt->execute();
		return $stmt;
	}

	public function erstellen($titel, $jahr, $laenge, $genre, $gesehen){
		$query = "INSERT INTO " . $this->tabelle . "(titel, jahr, laenge, genre, gesehen) VALUES (?,?,?,?,?)";
		$stmt = $this->connection->prepate( $query );
		$stmt->execute([$titel, $jahr, $laenge, $genre, $gesehen]);
	}

	public function existiert($titel){
		$query = "SELECT * FROM " . $this->tabelle . " WHERE titel = ?";
		$stmt = $this->connection->prepare( $query );
		$stmt->bindParam(1, $titel, PDO::PARAM_STR);
		$stmt->execute();
		$this->vorhanden = $stmt->fetch(PDO::FETCH_ASSOC);
		return $this->vorhanden;
	}
}