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
define( 'DB_NAME', 'lition');

/** Database username */
define( 'DB_USER', 'root');

/** Database password */
define( 'DB_PASSWORD', '');

/** Database hostname */
define( 'DB_HOST', 'localhost');

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
define( 'AUTH_KEY',         '7x$wDZ8q6{).U<rfoi@4t(?/v+z:?l}BlpnnThTX+sV_#P$Bp-dH3{4_PcJT5rP!' );
define( 'SECURE_AUTH_KEY',  'S{eE}qB NX;.IOpt)&V(16F%i[TrnpOLY-.)9S9F{-mF^sC5UP*upcuLrbEljz56' );
define( 'LOGGED_IN_KEY',    'zHh<9I`pKEGuAjJf8{E&U[8&_YPj+O{kSHFV!v*=;7@s^x8%]8-Hp~`[erw K$S1' );
define( 'NONCE_KEY',        'Lf=WhfJ.aEk:}N_uYazms~5XHm;H,-R-Mn)2.=GRJ`=J+yU>PaS1Az|s2iGc0CT8' );
define( 'AUTH_SALT',        'J7IGOBG!r8N,MTjJ;XM<LJVfv{Fa4Pda.NxN`K4kjp7AN0SiUtcMg3t8TF,[,ejb' );
define( 'SECURE_AUTH_SALT', 'H~jmaAbcM!i}Y7ZHV/s+>IN[5},EfyOy0& hP:ClmnLka8riuVW4}`^TA^fF]9qk' );
define( 'LOGGED_IN_SALT',   '!MUT+FBESNdPEqmU2GWWox{^w!qyOVWybZ+Ntso6&O09Q94!@+M>!*5e(Ct (eT_' );
define( 'NONCE_SALT',       '^ 0o,VvYE<&}b_S2*TY[y~={iwQd=PtGqPN#LBIP$Nt@fAn.`z2A`P5#2{z!Gmx,' );

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
