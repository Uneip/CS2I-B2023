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
define( 'DB_NAME', 'WORDPRESS' );

/** Database username */
define( 'DB_USER', 'victor' );

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
define( 'AUTH_KEY',         'eBK@~FO.N*SM={:v.RYrMn`yn #n=I5H>DSEAL:{(R-,.K$LzLNT3:#}Vw jGW=:' );
define( 'SECURE_AUTH_KEY',  'I@4^L%Y=fR.yLmUG <V}N<*9)XEKqSE~&G }aKGL;r+UPw.k>m!l`Bti~_JnxRWk' );
define( 'LOGGED_IN_KEY',    'ZI;Wp.6bk/aH+bRVJiQ4mx+EJ5bXpD{:!Kvy(~og{*/%x,S4:w bpIjOGB-7fiM(' );
define( 'NONCE_KEY',        '~0zz4|W{:zkF9qibL4z!-<Xw#Vq4L0,9(wX:HWDR`Ny!}oE/#rMbN@o$fZk1-?9Y' );
define( 'AUTH_SALT',        'Y!U-$!@R2nlm~z#;;k0U#A; ER4vaYo~|=KU[adeNgfhfz+j2hRV-cfoTck.b$AP' );
define( 'SECURE_AUTH_SALT', 't_((D`Y,QU+A|5t#3>i?bd89_uIp }v4;-Z5KEk_=PT;KP_^[/7/4v*d|>;,s9RF' );
define( 'LOGGED_IN_SALT',   'jIix|~H0_1jHpDQnb(#>67xB`q/Tg=[|$x~`M(P?hYI(p76YYrtb d$fCEvXf?rr' );
define( 'NONCE_SALT',       '~} Y!EM)Tk}q%oio(X%bhjxFEi>=^b_I.>KM/8m 7A&Lj9KWse#~wqL?UyL9)U3m' );

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
