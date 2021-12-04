<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'incipitt_WPVCK');

/** MySQL database username */
define('DB_USER', 'incipitt_WPVCK');

/** MySQL database password */
define('DB_PASSWORD', 'aquJw9rqy9W(WuoKt');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '690814082adeb5051a41c6a315f9f5b552c0afc533939df045d7906346eef88f');
define('SECURE_AUTH_KEY', '4bc63b106316e399c2090d1fc6fb5c06aa36e157f402e91acd51f7e7e4729ded');
define('LOGGED_IN_KEY', 'a580ced32803ea75ca1d50d1ba46b3016ad945384682cd9baf900d2b73fea9db');
define('NONCE_KEY', 'a2b578ceb8eb680a514c799f862ba5158eeb7931377f917509caab0d169a8c3c');
define('AUTH_SALT', '5c0d89c0f09a3a95de0b83b325c3c211f0c330410bc10c7af9e9147c1a790349');
define('SECURE_AUTH_SALT', '014b41d168f09cd3ec013b9fc9b140c31ac67167ef2b6cc6ade4b4ac23fe3980');
define('LOGGED_IN_SALT', 'f1ee717dbc4f637f2a88fd9bc71686e547d188bd4c647074b3c8915ac24ca308');
define('NONCE_SALT', 'fc87759a3e9319ac04c2dc51b40e67e3b9b067434552648ff4af77167fd3c7b3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Gr7_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
