<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'visitsri_a2wp146' );

/** MySQL database username */
define( 'DB_USER', 'visitsri_a2wp146' );

/** MySQL database password */
define( 'DB_PASSWORD', 'entS.60!p9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9vnxgyildb0urodrhd1alfrmqtipjfwsnqf6r65kreml8xxzh4eogtnlcifzgqdr' );
define( 'SECURE_AUTH_KEY',  'vjgje3f9w48uuodiysbudt3sv3x8kigvay91vijndyipt9jbp2j89kfw58ne4b2f' );
define( 'LOGGED_IN_KEY',    'kmedaakvkawlqn7dbv6dzl9iwlekrfhnohxqimadx04jxvqhznimihbxwz4en8xd' );
define( 'NONCE_KEY',        '1v62tpgcx6pnsz0mv2ew3qzmyavoyvguzvkg94ufspmhozqbbvpzuqnyib6mgpjs' );
define( 'AUTH_SALT',        '8rq42ufci9m08ubsoc8msbdzursib7xbv60dcay9finc0bqs5ogh0xt2lfpwpcnu' );
define( 'SECURE_AUTH_SALT', 'qjowx5efwj31ltmwexioigcsei0o4tzwuu5toyylpu0gaai0vbztuoxijhtizjkq' );
define( 'LOGGED_IN_SALT',   '119k9ekzlllsoibvqv2ahdv1nmc4dcwcc11zzuq7ioixlziunf6on5oel6vn3kze' );
define( 'NONCE_SALT',       'tll3xbsbot8ftepmnaff012jrv6x6xqjwkrsxmzs6de9a9hxigt6vkwuu2uzfvfo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvn_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
