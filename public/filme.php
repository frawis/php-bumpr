<?php

include_once 'inc/Database.php';
include_once 'inc/Film.php';

$db         = new Database();
$connection = $db->getConnection();

$film = new Film( $connection );

$filme = $film->lesen();
$count = $filme->rowCount();

if ( $count > 0 ) {
    while ($row = $filme->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        ?>
        <tr>
            <td><?php echo $name; ?></td>
        </tr>
        <?php
    }
} else {
	?>
    <div class="notification is-danger">
        <button class="delete"></button>
        Leider wurden kein Film in der Datenbank gefunden.
    </div>
	<?php
}