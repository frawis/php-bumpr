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

	public function __construct( $connection ) {
		$this->connection = $connection;
	}

	public function lesen() {
		$query = "SELECT * FROM " . $this->tabelle;
		$stmt  = $this->connection->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
}