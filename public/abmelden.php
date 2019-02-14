<?php
session_name( "Bumpr" );
session_start();
session_destroy();
//setcookie('benutzername', '', time() - 1); // Lebensdauer zuruecksetzen
header( 'Location: ../' );