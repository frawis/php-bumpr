<?php

/**
 * Class Database
 *
 */
class Database {

	public $connection;

	/**
	 * Verbindung zum Datenbankserver aufbauen
	 *
	 * @return PDO
	 */
	public function getConnection() {
		$db  = parse_url( getenv( "DATABASE_URL" ) );
		$this->connection = new PDO( "pgsql:" . sprintf(
				"host=%s;port=%s;user=%s;password=%s;dbname=%s",
				$db["host"],
				$db["port"],
				$db["user"],
				$db["pass"],
				ltrim( $db["path"], "/" )
			) );
		return $this->connection;
	}
}