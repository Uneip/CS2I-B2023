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
define( 'DB_NAME', 'charli' );

/** Database username */
define( 'DB_USER', 'peugeot' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'n,T/P8t$t_P}lGl[:a}=Hy)sY.~BSWC9dp3OWB<,<K@aa]prJ[.XzR^:bE<vy@Pp' );
define( 'SECURE_AUTH_KEY',  'd,4`a:Q|@:7cnZ<`z4f2+4)%{i>LHa=HZM1:V!@a.wmrT:9W,Q+KSYFTiBY*bQ+~' );
define( 'LOGGED_IN_KEY',    'z9t6OR}kr@c&cbDD:IK!apzy8z9K7uj1+sIK~e%ry[=&U[+nK6|{J<oVa*_@x1S{' );
define( 'NONCE_KEY',        'b:V0`g:8(k<:vzo$8A<QXzoYp2}O8h@Z9})&6=-QrYuHP*uT#;K-SB;/O%>QnOST' );
define( 'AUTH_SALT',        '|2E`?kS16a:8LHZuj!.qj.a$6}%dUNnDLWjU6F,m._2QWi(Q@6oQ?EKa-H&OC|z1' );
define( 'SECURE_AUTH_SALT', 'I>FKaSY7F9R^MXBi2{$sO;JBDx^FE.hs1(IV]-Gg};sF{sWW(q~yOrNx_u/`(7Lz' );
define( 'LOGGED_IN_SALT',   'L<SPZpc{Z3jPTHW]]Csl~3,|qrfu%EOk[Qm_a,YDMA@}C&sOIV58u/[ #e%dKv(p' );
define( 'NONCE_SALT',       '|uMZip5;7y@u2mw;j*wp7c$D?<f^9Nxd:5hfzQT$:g<{:Ap)p:2z@+667sg8}:nj' );

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
