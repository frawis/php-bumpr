<?php
if ( ! isset( $_SESSION['angemeldet'] ) ) {
	$_SESSION['angemeldet'] = false;
}

if ( ! isset( $_SESSION['benutzername'] ) ) {
	$_SESSION['benutzername'] = '';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $seitentitel ?> | FilmDB</title>
    <meta name="description" content="PHP FilmDB">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-config" content="assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body class="has-navbar-fixed-top">
<nav class="navbar is-fixed-top is-black">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="assets/img/favicon/favicon-32x32.png"> Bumpr FilmDB
        </a>
        <a role="button" class="navbar-burger" data-target="bumprMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu" id="bumprMenu">
        <div class="navbar-start">
            <a href="#" class="navbar-item">Start</a>
        </div>
        <div class="navbar-end">
			<?php if ( $_SESSION['angemeldet'] === true ) { ?>
                <a href="abmeldung.php"><?= $_SESSION['benutzername'] ?></a>
			<?php } else { ?>
                <a href="anmelden.php" class="navbar-item">Anmelden</a>
			<?php } ?>
        </div>
    </div>
</nav>