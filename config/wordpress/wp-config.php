<?php
// ** Paramètres MySQL ** //
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));          // Nom de la base de données
define('DB_USER', getenv('WORDPRESS_DB_USER'));          // Utilisateur de la base de données
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));  // Mot de passe de la base de données
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));          // Hôte de la base de données (ex. : mysql:3306)
define('DB_CHARSET', 'utf8mb4');                         // Jeu de caractères de la base de données
define('DB_COLLATE', '');                                // Collation de la base de données

// ** Clés et Salage pour l'authentification ** //
define('AUTH_KEY', getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('NONCE_KEY'));
define('AUTH_SALT', getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT'));
define('NONCE_SALT', getenv('NONCE_SALT'));

// ** Préfixe des tables de la base de données ** //
$table_prefix = 'wp_';

// ** Mode débogage ** //
define('WP_DEBUG', false);  // Active ou désactive le mode de débogage

// ** Désactivation de l'édition de fichiers depuis le tableau de bord WordPress ** //
define('DISALLOW_FILE_EDIT', true);

// ** Définition des URLs de site et de page d'accueil ** //
define('WP_HOME', getenv('WP_HOME'));          // URL de la page d'accueil
define('WP_SITEURL', getenv('WP_SITEURL'));    // URL de l'installation WordPress

// ** Définition du répertoire de contenu ** //
define('WP_CONTENT_DIR', '/var/www/html/wp-content');  // Chemin vers le contenu WordPress
define('WP_CONTENT_URL', getenv('WP_CONTENT_URL'));    // URL vers le répertoire de contenu

// ** Définition du répertoire de téléchargements ** //
define('UPLOADS', 'wp-content/uploads');  // Chemin pour les téléchargements

// ** Désactivation des mises à jour automatiques ** //
define('AUTOMATIC_UPDATER_DISABLED', true);  // Désactive les mises à jour automatiques

// ** Désactiver les mises à jour et installations de plugins et thèmes ** //
define('DISALLOW_FILE_MODS', true);  // Interdit l'installation de plugins/thèmes depuis le tableau de bord

// ** Limite de mémoire allouée à WordPress ** //
define('WP_MEMORY_LIMIT', '256M');  // Limite de mémoire pour WordPress

// ** Définir le nombre maximum de révisions d'article ** //
define('WP_POST_REVISIONS', 5);  // Limite le nombre de révisions par article

// ** Planification de la suppression de la corbeille ** //
define('EMPTY_TRASH_DAYS', 7);  // Supprime les éléments de la corbeille tous les 7 jours

// ** Intervalle de sauvegarde automatique ** //
define('AUTOSAVE_INTERVAL', 300); // Sauvegarde automatique toutes les 5 minutes

// ** Chargement de l'environnement et du template WordPress ** //
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
