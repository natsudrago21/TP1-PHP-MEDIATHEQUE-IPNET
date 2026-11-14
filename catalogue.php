<?php
require_once 'data/livres.php';
require_once 'includes/fonctions.php';

$livresAffiches = $livres;
$messageFiltre = "";

if (isset($_GET['categorie']) && !empty($_GET['categorie'])) {
    $catDemandee = $_GET['categorie'];
    $livresAffiches = filtrerParCategorie($livres, $catDemandee);
    
    if (count($livresAffiches) == 0) {
        $messageFiltre = "Aucun livre trouvé pour la catégorie : " . htmlspecialchars($catDemandee);
    } else {
        $messageFiltre = "Filtré par catégorie : " . htmlspecialchars($catDemandee);
    }
}

include 'includes/header.php';
?>

<h2>Catalogue des livres</h2>

<p>
    <strong>Filtrer :</strong> 
    <a href="catalogue.php">Tous</a> | 
    <a href="catalogue.php?categorie=Roman">Roman</a> | 
    <a href="catalogue.php?categorie=Informatique">Informatique</a> | 
    <a href="catalogue.php?categorie=Conte">Conte</a> | 
    <a href="catalogue.php?categorie=Aventure">Aventure</a>
</p>

<?php if (!empty($messageFiltre)) : ?>
    <p><em><?php echo $messageFiltre; ?></em></p>
<?php endif; ?>

<p>Nombre de livres affichés : <strong><?php echo count($livresAffiches); ?></strong></p>
<hr>

<?php if (count($livresAffiches) > 0) : ?>
    <?php foreach ($livresAffiches as $livre) : ?>
        <?php echo afficherLivre($livre); ?>
    <?php endforeach; ?>
<?php else : ?>
    <p>Aucun livre disponible dans cette sélection.</p>
<?php endif; ?>

<?php
include 'includes/footer.php';
?>