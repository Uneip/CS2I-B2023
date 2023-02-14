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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

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
define( 'AUTH_KEY',         'XdCnw<G)j;3c-4dD=fUnJ<lQB]:9&A[da}{#ZFS#t/C>gk<4%=ach50vJ<@[1H;(' );
define( 'SECURE_AUTH_KEY',  'jYdj7Ei`4?cMr^c]kQy4A?v*IS,s)Qa[z@~XmnD3qG,&#]:2sv~fKF/S#DZ17P#F' );
define( 'LOGGED_IN_KEY',    '|VgLz.qSD~E>xvI@h1AIq>B<gCP)fZkV r,Su`.e]YQ?s}Bu:M6!uSMVbZ)wR.DO' );
define( 'NONCE_KEY',        '1F#1tX?K`g)Vx,P$QTM .B~-~Co;kw-(<YIk))#SL~,/U>Ppw6_Rc^L]FWSojxxo' );
define( 'AUTH_SALT',        ':>&,CZ!_ep?cBb;MT^Yz:;Y+Wfx+%S.^d_@X/=pg;1m_6*Z-@#vi/@SZtq-:Y8a>' );
define( 'SECURE_AUTH_SALT', 'l?y:NsF?G;d_9Zo@ IP4lTX:mjnWzezcz7Qb7rJT0B@@Z*V%6F}qmWmiG5lp9l#{' );
define( 'LOGGED_IN_SALT',   '4m;gy^NAeCoM/}NK7Xi$EDsGPqY](q@WQ@inQvLoASE!T/;)i5O80+3XH% }exr}' );
define( 'NONCE_SALT',       '|h@NU@Y!A2xW?<-je>%_n=)p>#/Zn0Alr|G{t(Ap>`-6oN{0U3BvQOx:uy_#hG?D' );

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
