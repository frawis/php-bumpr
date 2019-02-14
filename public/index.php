<?php
$seitentitel = "Start";


include_once "parts/header.php";

if ( $_SESSION['angemeldet'] ) {
	include_once 'parts/intern.html';
} else {
	include_once 'parts/willkommen.html';
}
include_once "parts/footer.php";
