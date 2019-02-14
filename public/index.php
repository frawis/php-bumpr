<?php
session_name( "BumprFilmDB" );
session_start();
$seitentitel = "Start";


include_once "parts/header.php";

var_dump( $_SESSION['angemeldet'] );

if ( $_SESSION['angemeldet'] ) {
	include_once 'parts/intern.html';
} else {
	include_once 'parts/willkommen.html';
}


include_once "parts/footer.php";
