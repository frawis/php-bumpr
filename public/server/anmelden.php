<?php
session_name( "BumprFilmDB" );
session_start();

$benutzername       = isset( $_POST['benutzername'] ) ? $_POST['benutzername'] : "";
$benutzerpasswort   = isset( $_POST['benutzerpasswort'] ) ? $_POST['benutzerpasswort'] : "";
$angemeldet_bleiben = isset( $_POST['angemeldet_bleiben'] );

include_once '../inc/Database.php';
$db         = new Database();
$connection = $db->getConnection();

$stm = $connection->prepare( "SELECT * FROM t_users WHERE benutzername = ?" );
$stm->execute( array( $benutzername ) );
while ( $row = $statement->fetch() ) {
	if ( $benutzername === $row['benutzername'] ) {
		if ( md5( $benutzerpasswort ) === $row['passwort'] ) {
			$_SESSION['benutzername'] = $benutzername;
			$_SESSION['angemeldet']   = true;
			if ( $angemeldet_bleiben ) {
				setcookie( 'BUMPRFILMDB', $benutzername, time() + ( 3600 * 24 * 365 ), "/", "secret-badlands-78677.herokuapp.com" ); // 1 Jahr gueltig
			}
		}
		break;
	}
}

//
//header( 'Location: /' );