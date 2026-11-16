# Médiathèque IPNET - TP1 PHP

## Description
ceci est un site web dynamique en PHP sans base de données pour afficher un catalogue de livres.

## Prérequis
- Un serveur local comme XAMPP ou WAMP.

## Lancement
1. Placer le dossier du projet dans le dossier `WWW` de WAMP(wamp64).
2. Démarrer Apache.
3. Ouvrir le lien : `http://localhost/mediatheque-mp1/index.php`

## Fonctionnalités réalisées
- Page d'accueil avec compteur de livres disponibles.
- Page catalogue complète avec affichage dynamique des 8 livres.
- Système de filtrage par catégorie via les paramètres URL.
- Page détail sécurisée pour chaque livre.
- Page « À propos » avec affichage dynamique de la date et l'heure.
- Utilisation de fonctions modulaires, d'includes, et sécurisation avec `htmlspecialchars()`.
