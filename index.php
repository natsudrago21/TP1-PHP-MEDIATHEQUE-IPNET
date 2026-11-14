<?php

require_once 'data/livres.php';
require_once 'includes/fonctions.php';

$totalDispo = compterLivresDisponibles($livres);

include 'includes/header.php';
?>

<h2>Bienvenue à la Médiathèque</h2>
<p>Ceci est le site web de gestion de notre médiathèque.</p>

<p>Nombre total de livres disponibles : <strong><?php echo $totalDispo; ?></strong></p>

<p><a href="catalogue.php">Accéder au catalogue complet</a></p>

<?php

include 'includes/footer.php';
?>