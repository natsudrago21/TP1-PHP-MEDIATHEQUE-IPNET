<?php
require_once 'data/livres.php';
require_once 'includes/fonctions.php';

$livreTrouve = null;
$erreur = "";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    $livreTrouve = trouverLivreParId($livres, $id);

    if ($livreTrouve === null) {
        $erreur = "Désolé, ce livre n'existe pas.";
    }
} else {
    $erreur = "Aucun identifiant de livre spécifié.";
}

include 'includes/header.php';
?>

<h2>Détails du livre</h2>

<?php if (!empty($erreur)) : ?>
    <p class="erreur"><?php echo htmlspecialchars($erreur); ?></p>
<?php else : ?>
    <div class="livre-detail">
        <h3><?php echo htmlspecialchars($livreTrouve['titre']); ?></h3>
        <p><strong>Auteur :</strong> <?php echo htmlspecialchars($livreTrouve['auteur']); ?></p>
        <p><strong>Année :</strong> <?php echo htmlspecialchars($livreTrouve['annee']); ?></p>
        <p><strong>Catégorie :</strong> <?php echo htmlspecialchars($livreTrouve['categorie']); ?></p>
        <p><strong>Prix :</strong> <?php echo htmlspecialchars($livreTrouve['prix']); ?> €</p>
        <p><strong>Disponibilité :</strong> <span class="badge <?php echo $livreTrouve['disponible'] ? 'dispo' : 'emprunte'; ?>"><?php echo $livreTrouve['disponible'] ? 'Disponible' : 'Emprunté'; ?></span></p>
    </div>
<?php endif; ?>

<br>
<p><a href="catalogue.php">← Retour au catalogue</a></p>

<?php
include 'includes/footer.php';
?>