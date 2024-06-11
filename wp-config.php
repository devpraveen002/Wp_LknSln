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
define( 'DB_NAME', 'lknsln' );

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
define( 'AUTH_KEY',         'l`a;A(BI]&MRhUat><yofk3#71qhY4#~9=Zi.Bqp|Vf7j%XlI~i|o=azWMS8p6HA' );
define( 'SECURE_AUTH_KEY',  'Q^bMSGq~]#IVdz`=(OLNfxYt9 !31*%#YwoBqx),DE+Cx!,>pe,/ZUp16jAj^Lr>' );
define( 'LOGGED_IN_KEY',    ')7?LZpfU?ji>7_y|[B|N@.;QooJ1pnoF3z`[e1|(7joD>R%{2H/nI(?R#Ow7h6gw' );
define( 'NONCE_KEY',        '{z|%dc<p6!2?]U37+?G?,LuGC*?J6Sn9|YSB X7|CGSjh})md9i@3yyn+f97pwVJ' );
define( 'AUTH_SALT',        'e%Whd4=]F2Si1=gG%N.[_>oKaqrTFo7,#8YlEq7k75Q~ g`PT{;5d$L,mH$s zX9' );
define( 'SECURE_AUTH_SALT', 'xk$lB0}3Rr^LqrGsEFBI8[{Stmwr7)Z&%V((%s3EjBtI<XN|ARlRO`k3;U(;m3Ep' );
define( 'LOGGED_IN_SALT',   'bq2AH0!2b*9 kgV(gbUA R%CnpU3ZsQ[;<Sque(^ea-dP<XCQHrd:o!`Mhh}*}Nc' );
define( 'NONCE_SALT',       'dH*9{gcUQd+Me_A_!Hc+_U}-@yv`J?ijuRnJPs~}[h2p4c~!j)*om0WI!QK Z0KH' );

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
