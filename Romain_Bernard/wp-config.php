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
define( 'DB_NAME', 'gitwordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '6(ls&L-.]]{,c(L3/5L3w#tJ0Krun~Z4%ZClC9X 6]C]8=}e0QpM? :$;+Fq0|RL' );
define( 'SECURE_AUTH_KEY',  'a,L%|c;2X{wjlbNF_?b%zEkRtUR%Ka.q51^f]9+:yweE@iNS0x*&&vE$YQRo!X&h' );
define( 'LOGGED_IN_KEY',    'vtYx*0q&-Pn3Dxzg<-(?;x2Hc-C93p@8/fO([6G@m]gTLM8L6O,CaCz.b(k)mC7b' );
define( 'NONCE_KEY',        '} +i!|yyBt`,k])1_-hh<mYQ_L[Wo$E5@@,gNV;4<p$--b>_fA~vs/gcD97PdIsp' );
define( 'AUTH_SALT',        'hcDCw{bHaBP#J%zcthP^39JjN3y(gpS]C0wn&q-M`ck=?Z9`>qX(BUq^|h<c?3Mb' );
define( 'SECURE_AUTH_SALT', 'YEI6nQPECc!vD&1+@`JeGshan@FQreDS:;bk:I`W;{^ejhV2^*+4Sf5|5Y]i],N;' );
define( 'LOGGED_IN_SALT',   '$ 7e<LpDl^-i-Vsd$>d1%S;}@W|Epeb0* 5FFL|#LQrk;4f`LbX%Z(_qRJ$h`4o%' );
define( 'NONCE_SALT',       ' TyUK&UyOdP-rT)[slvizH8 {14L|ie2?~d%*<bopA};(Oe@z5@;$6<PR.]EXAvr' );

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

