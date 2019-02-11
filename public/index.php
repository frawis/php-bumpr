<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bumpr</title>
    <meta name="description" content="PHP Testanwendung">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="/assets/img/favicon/site.webmanifest">
		<link rel="shortcut icon" href="/assets/img/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#603cba">
		<meta name="msapplication-config" content="/assets/img/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
</head>
<body class="has-navbar-fixed-top">
<nav class="navbar is-fixed-top is-black">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            Bumpr
        </a>
        <a role="button" class="navbar-burger" data-target="bumprMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu" id="bumprMenu">

    </div>
</nav>
<section class="section">
    <div class="container">
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
            your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <h1 class="title">Bumpr</h1>
        <p class="subtitle">Testanwendung</p>
	    <?php include_once 'filme.php' ?>
    </div>
</section>
<footer class="footer">
    <div class="content has-text-centered">
        <p>FilmDB &copy; 2019</p>
    </div>
</footer>
<script src="assets/js/script.js"></script>
</body>
</html>