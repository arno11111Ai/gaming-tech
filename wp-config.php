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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ',1JtP2y&RrU*wKw{$Y]Dek]ZOT1IBh=M<,l49*,U# 6Pv/OpQ5a</l|45J #h8e ' );
define( 'SECURE_AUTH_KEY',  'n<U::!AzZg}G*#`X28~E3+X0a>(Og>Izn8uZixC@GZ3uo1V)4YowZWiF|tPk/.KW' );
define( 'LOGGED_IN_KEY',    'c<#&-h1?2&<[)u?R$A.E&xi]A^E> ZN*T.(Wi7OcdBEg^p/$ ;d7Gu#V+czpUezb' );
define( 'NONCE_KEY',        ':g5QNpJ];hdg$O.X8eB*W0}h8yBLrO$bX:9KEMdRooRjFS;KGa`hon^&8%g.zR8$' );
define( 'AUTH_SALT',        's3(IZpui(WsY^1E0+%HJ9 6y]tD.]&hvRJfGj6R{}hBp31$@Yx7*@)?]:OO5yZES' );
define( 'SECURE_AUTH_SALT', 'q.I(<~gwB8J3(PlwtU!qpF3N`l,$^otuVZUdN/KP]`T0O)~4#lAy=97=OaB[YV2S' );
define( 'LOGGED_IN_SALT',   'H^=chM}{ ?qCr|bBu}W{6Z@KD><l>yg1CQgv ,ni;OmWGz!sM-Z)_rIk[M#QSCy.' );
define( 'NONCE_SALT',       '=o!9Q] dY?f7.`q6soP(2W_SAsP0W.-a0y+7Y)}oTkKpyrbYEt:N.<oGkO,;bGrY' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
