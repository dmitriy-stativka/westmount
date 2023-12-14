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
define( 'DB_NAME', 'westmount' );

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
define( 'AUTH_KEY',         ']^6GH)=nWR4Uu-Q=3I,)B[Y*!r|l.{sV#a/+{k5(]9RX8c#bmDZV#x9jq`1Y^/Jt' );
define( 'SECURE_AUTH_KEY',  'BKWW@uPi[uI*jS8QN]mO&1McHO:/00vJv$,8=/D^KID8+`Ym<NN==aBp4v+uQ0xc' );
define( 'LOGGED_IN_KEY',    'I|Tw)63psb$_]I$RI/xX,Y9-k;q}Qh`~wGAn,4XQN20R>P=!8@^XLu@Bm3MiZZXh' );
define( 'NONCE_KEY',        'WQ=rdJ3>PtY7(=t1&/QU] ED<HZUq*`K[w|4r%xZ/CT4rLQ?5686)iaY&|yZyX^!' );
define( 'AUTH_SALT',        '~IJKa0Fhou,hxy14FNPICK**#PHiBZGgN:EiHCS8x*]*$%qzI=3 FXiEQ=7pHv5a' );
define( 'SECURE_AUTH_SALT', '[wx)(bainRx?sN/K6AUE8ies%nwrCjgFw.SZQPg>YsM@tFXZjBlHB@3)&JJ(u wC' );
define( 'LOGGED_IN_SALT',   'kF+cnh-eh2%}Z3<V3{L/l.`Ez*?FDNf^ w;Q13D>{{s4rlma?+aC?S%x1,U`3udJ' );
define( 'NONCE_SALT',       'RL0gCO{w+9-#-kE)SrB?E}qI>&n9VXq9^9|{[;Q=ZplQ8(.9om@sI)de!}Bi98=e' );

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

define( 'WP_POST_REVISIONS', 4 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
