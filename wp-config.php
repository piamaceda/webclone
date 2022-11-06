<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PIA' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a0eweH8Fhqb5t8WKF8cmL3LCsemGLcsmWNPJbX1tUiTPhTi9PW4vTd4HnCgy8ULx' );
define( 'SECURE_AUTH_KEY',  'NKeC8WZOgUDQEiHnaXDcmnOC2p4oVsDzhLk9gdUOv8sDxKdfFlEWsknN2GOzVAFd' );
define( 'LOGGED_IN_KEY',    'PBJmrSQWeVCick2075z2a8FmoZU6tS01NvXKQD0R4a9BT5t6HBUmGyCaZxAzGxdX' );
define( 'NONCE_KEY',        'tu9hX3Ayz5TBvJxqDjRpemsPLVpQARDJkq90FL5tzUyHedeutGo5ZqBh2cV7cN90' );
define( 'AUTH_SALT',        '14aUUDXkGAAwIf9dmUWkH8UStkMhS2szeowuU0dA5eTwUitqumiSDQPY49MsZavP' );
define( 'SECURE_AUTH_SALT', 'vNStrztTJsTRaytnD8sR2ZK52Am9JZCFITGjLAaAAbIMaCQeAbxdmUnjRD225PuT' );
define( 'LOGGED_IN_SALT',   '8RVjz6ni1WLzHKL3IWcSWmXGeo6jnLrGQjFccNT57ACj71IvqpnsKqF6DSKLUn2s' );
define( 'NONCE_SALT',       '0Hr5T2erZXK2fL6OF49HK7PqBYW1WbW8l4iOLc98ECihrkYmrFERZEUrCJwLFjAb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
