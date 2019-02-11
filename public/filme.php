<?php

include_once 'inc/Database.php';
include_once 'inc/Film.php';

$db         = new Database();
$connection = $db->getConnection();

$film = new Film( $connection );

$filme = $film->lesen();
$count = $filme->rowCount();

if ( $count > 0 ) {
	?>
    <table class="table is-striped is-hoverable is-bordered is-fullwidth">
        <thead>
        <tr>
            <th>Titel</th>
            <th>Jahr</th>
            <th>Länge</th>
            <th>Genre</th>
            <th>Gesehen</th>
        </tr>
        </thead>
        <tbody>
		<?php
		while ( $row = $filme->fetch( PDO::FETCH_ASSOC ) ) {
			extract( $row );
			?>
            <tr>
                <td><?php echo $titel; ?></td>
                <td><?php echo $jahr; ?></td>
                <td><?php echo $laenge; ?></td>
                <td><?php echo $genre; ?></td>
                <td><?php echo( $gesehen == 1 ? '+' : '-' ); ?></td>
            </tr>
			<?php
		}
		?>
        </tbody>
    </table>
	<?php
} else {
	?>
    <div class="notification is-danger">
        <button class="delete"></button>
        Leider wurde kein Film in der Datenbank gefunden.
    </div>
	<?php
}