<?php

function compterLivresDisponibles(array $livres): int {
    $compteur = 0;
    foreach ($livres as $livre) {
        if ($livre['disponible'] == true) {
            $compteur++;
        }
    }
    return $compteur;
}

function filtrerParCategorie(array $livres, string $categorie): array {
    $resultat = [];
    foreach ($livres as $livre) {

        if (strtolower($livre['categorie']) == strtolower($categorie)) {
            $resultat[] = $livre;
        }
    }
    return $resultat;
}

function trouverLivreParId(array $livres, int $id): ?array {
    foreach ($livres as $livre) {
        if ($livre['id'] == $id) {
            return $livre;
        }
    }
    return null;
}

function afficherLivre(array $livre): string {
    $statut = $livre['disponible'] ? 'Disponible' : 'Emprunté';

    $classe = $livre['disponible'] ? 'dispo' : 'emprunte';
    $html = "<div class='livre'>";
    $html .= "<h3>" . htmlspecialchars($livre['titre']) . "</h3>";
    $html .= "<p>Auteur : " . htmlspecialchars($livre['auteur']) . "</p>";
    $html .= "<p>Année : " . htmlspecialchars($livre['annee']) . "</p>";
    $html .= "<p>Catégorie : " . htmlspecialchars($livre['categorie']) . "</p>";
    $html .= "<p>Prix : " . htmlspecialchars($livre['prix']) . " €</p>";
    $html .= "<p>Statut : <span class='badge $classe'>" . $statut . "</span></p>";
    $html .= "<a href='detail.php?id=" . $livre['id'] . "'>Voir les détails</a>";
    $html .= "</div>";

    return $html;
}