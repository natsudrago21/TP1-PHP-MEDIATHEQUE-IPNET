# Journal de bord - TP1 PHP - Médiathèque IPNET

## 1. Les Difficultés rencontrées
- La configuration initiale des chemins d'accès pour les fichiers inclus entre les dossiers `includes/`, `data/` et la racine.
- La gestion de la persistance et de la vérification des paramètres GET pour éviter les erreurs si l'URL est modifiée manuellement.

## 2. Les solutions apportées
- l'utilisation systématique de chemins relatifs clairs et structuration rigoureuse des dossiers.
- l'ajout de conditions `isset()` et de vérifications avec les fonctions créées dans `includes/fonctions.php` pour valider l'existence des IDs et des catégories avant l'affichage.

## 3. Ce qui a été appris
- la maîtrise des bases de la syntaxe PHP 8 et de la manipulation des tableaux associatifs multidimensionnels.
- la structuration propre d'un mini-site modulaire grâce au découpage en composants.
- la sensibilisation à la sécurité web de base.