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
define( 'DB_NAME', 'peugeot' );

/** Database username */
define( 'DB_USER', 'peugeot' );

/** Database password */
define( 'DB_PASSWORD', 'peugeot' );

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
define( 'AUTH_KEY',         'aZCs+o<n#pf`7~I.I:2P/<K8mvBj^~rOmURlST/HR`9i9=7-9wLzC{{Cj69D&|u#' );
define( 'SECURE_AUTH_KEY',  '[r1tR}_nM^VZA>~d*%7Kw++m*@RSCj}gAulN7s&>{LCP0_]&%0zTF)07#=Me=EV!' );
define( 'LOGGED_IN_KEY',    'rEZ=@rGnW<sivy>ud1Wo_kYl0cD|M( 2`,*$1J2cj$}C%pu5B3k!ko$].nF!.Q,z' );
define( 'NONCE_KEY',        'KoCttao]:[)nkEo?c[p6UJ!i|n&TiCj-8EoX%amr=<I8AeJ&eO$8r+52?:#vnPrM' );
define( 'AUTH_SALT',        '@:uox{xGCWqsavN>Kr-S!6jRnV^}0#RF,LDzh+_rgtOMO3x2z[Rk($j4(:u*!HuE' );
define( 'SECURE_AUTH_SALT', 'NqoP;;l_tu:IQCA<Wrn{zu.HNoD:<c6*k_Yc_a;C$.7-@K&kF%g!9&P=8@NHR_3`' );
define( 'LOGGED_IN_SALT',   'Utn1wB9X83WBe%^am:mWH5!]x,9.@2$,i:o=?UTXGlMiq<,Cw&$_phM/f0BNK@B.' );
define( 'NONCE_SALT',       'VCr[<:>ajEN$/Vo(v8tw=f`Wm^wa8yRpx&C7H6Ycb cw*<dl^4rq%nS!C}3p~_qp' );

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
