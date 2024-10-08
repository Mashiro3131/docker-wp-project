<?php
// ** MySQL settings ** //
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
define('DB_USER', getenv('WORDPRESS_DB_USER'));
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// ** Authentication Unique Keys and Salts ** //
define('AUTH_KEY', getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('NONCE_KEY'));
define('AUTH_SALT', getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT'));
define('NONCE_SALT', getenv('NONCE_SALT'));

// ** Database Table prefix ** //
$table_prefix = 'wp_';

// ** Debugging mode ** //
define('WP_DEBUG', false);

// ** Disable file editing from the WordPress dashboard ** //
define('DISALLOW_FILE_EDIT', true);

// ** Set the site and home URLs ** //
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));

// ** Set the content directory ** //
define('WP_CONTENT_DIR', '/var/www/html/wp-content');
define('WP_CONTENT_URL', getenv('WP_CONTENT_URL'));

// ** Set the uploads directory ** //
define('UPLOADS', 'wp-content/uploads');

// ** Disable automatic updates ** //
define('AUTOMATIC_UPDATER_DISABLED', true);

// ** Disable plugin and theme updates and installation ** //
define('DISALLOW_FILE_MODS', true);

// ** Set the memory limit ** //
define('WP_MEMORY_LIMIT', '256M');

// ** Set the maximum number of post revisions ** //
define('WP_POST_REVISIONS', 5);

// ** Set the trash emptying schedule ** //
define('EMPTY_TRASH_DAYS', 7);

// ** Set the autosave interval ** //
define('AUTOSAVE_INTERVAL', 300); // 5 minutes

// ** Load the WordPress environment and template ** //
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');