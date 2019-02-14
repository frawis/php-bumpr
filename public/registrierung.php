<?php
session_name( "Bumpr" );
session_start();
//global $seitentitel;
$seitentitel = "Registrierung";

include_once "parts/header.php";
?>

    <div class="hero has-background-grey-lighter is-fullheight-with-navbar">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6-desktop is-offset-3">
                    <h3 class="title has-text-black-ter is-uppercase"><?= $seitentitel ?></h3>
                    <p class="subtitle has-text-grey-dark">Hier können Sie sich ein Konto erstellen.</p>
                    <div class="box">
                        <form method="post" action="">
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input type="text" class="input" placeholder="Benutzername" name="benutzername">
                                    <span class="icon is-small is-left">
									<i class="fas fa-user"></i>
								</span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input type="text" class="input" placeholder="Vorname" name="vorname">
                                    <span class="icon is-small is-left">
									<i class="fas fa-user"></i>
								</span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input type="text" class="input" placeholder="Name" name="nachname">
                                    <span class="icon is-small is-left">
									<i class="fas fa-user"></i>
								</span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input type="email" class="input" placeholder="E-Mail" name="email">
                                    <span class="icon is-small is-left">
									<i class="fas fa-at"></i>
								</span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input id="passwort1" type="password" class="input" placeholder="Passwort" name="passwort1">
                                    <span class="icon is-small is-left">
									<i class="fas fa-key"></i>
								</span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input id="passwort2" type="password" class="input" placeholder="Passwort wiederholen" name="passwort2" onkeyup="checkPasswort(); return false;">
                                    <span class="icon is-small is-left">
									<i class="fas fa-key"></i>
								</span>
                                    <p class="help is-danger" id="fehlerNachricht"></p>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-block is-large is-fullwidth is-primary">Registrieren</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once "parts/footer.php";