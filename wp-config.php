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
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         'Y7BFZ9!}VzfjWLBr]x?eYS0YG6{^b3$5v0lA;,0ne@l8Nm,].NvledtK8;=*LT(v' );
define( 'SECURE_AUTH_KEY',  'P-STjIBoYr_CeB,D-qR:i5^6vo9>9~(o+S|inHDV}MQdLXqx{eNhSRjO`zHk!Om(' );
define( 'LOGGED_IN_KEY',    'H,W(:r6nuo2Ihk-Y8z.bZbO!=:vKyzi8/(*#;5^GETej^q7Zj#jn88quW,juCTVf' );
define( 'NONCE_KEY',        '5p`RJ}&!}w8so|.VVMFM%G0bDk`z~f>C=Cd~iqU#5bp9b0i^)rN:NO:b4B|7-V22' );
define( 'AUTH_SALT',        '9/$lq!^ceh,p3TpIV$p=K-h3S2k-j7AlJnH;YHsRRjX:|C- GR ?#}xL4*(T/{CA' );
define( 'SECURE_AUTH_SALT', '8rQ@i%jP7bOfc)]IB$vZin*A>_AW5-ZvEe=<& @H=6iZH+|%Pf3Xz<3l%ZcLn;r=' );
define( 'LOGGED_IN_SALT',   'r0Z5`;|]CwVQ)h}sq<T}atG// ;!(y=u6Rld}q!3mhia}:Sai(?0V>FUQ}b1T?#W' );
define( 'NONCE_SALT',       '>/:W{*;qYuI39-:rHL[M^-#o,%{O)bncCNpT+;~/A)W)UNa}4VD,MX_dPf4Uo%oq' );

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
