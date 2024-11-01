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
define( 'DB_NAME', 'alansfm321' );

/** Database username */
define( 'DB_USER', 'alansfm321' );

/** Database password */
define( 'DB_PASSWORD', 'A8afx5B6Su' );

/** Database hostname */
define( 'DB_HOST', 'alansfm321.mysql.db' );

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
define( 'AUTH_KEY',         '@:FA$?x::K*`I}0!iAA5;ckjY<-)O1yJ-oKq7<R}7ScIxY5_*jxd<^8DrXVp!A~j' );
define( 'SECURE_AUTH_KEY',  '7Ql|(Y@L<kyIi&3@GaSM3E}w]_!AhUk8fxc7=(iw}&[dg>GM^m{Nl[~;k^rB1qS#' );
define( 'LOGGED_IN_KEY',    'KS?7CF?k;Q]kz!V^os$4h)Od)auaZox3_8@EQwOvclPf-l6G0szdFp*oo[g=)u^z' );
define( 'NONCE_KEY',        'v3/z2zi(//P}I/~BE nd0?U5OR?+;>owW*Z{~za&5p]]6vho35*&Qn1fXq;=L,SJ' );
define( 'AUTH_SALT',        '>z6rORW>WF+7n2R({4{H|E6i WaqC<1,=$MIcR7r)U{0V=V&M1-2FqZF#O?V79yw' );
define( 'SECURE_AUTH_SALT', 'SdZ{oPc`(JGDCV0 +RZEIqtN* X2tE&.u(bt$42-SF/VmNFu>_T[1G<+Ds_,(G4W' );
define( 'LOGGED_IN_SALT',   'Uw3 #Lib]w}(iNY.q}6X]Z@{=`;/.r8%Pmoi1&]>RJ8}k0-|ok%]c,PIvQw~BNZ[' );
define( 'NONCE_SALT',       'hN0#j[CtrD6hgro=MXrKyn&PmK47hy!H3vt|+k^3OW#SF;si(?QwB38Z1A3=rRSn' );

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
