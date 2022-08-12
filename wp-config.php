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
define( 'DB_NAME', 'creepycoding_db' );

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
define( 'AUTH_KEY',         'BcwEd,O^K3M1IU+Dg/wjyA!~Mhg~hL>5RVO@p?Jeeuj ~|WK%t^&!:xUsM2Hkm7Z' );
define( 'SECURE_AUTH_KEY',  '$Mn}^EehvH:0+GNMzBZ-9BbuJCA~`ltJ.FpC.lc  zyoG~j|0V(nDbE{z#Sy@Er@' );
define( 'LOGGED_IN_KEY',    '9{W7Tbk!.mv>2El#X2w:j#>i}~|7=ITG39P-WC_P:L^G7(,gQ@)E&Q^3f)5-iWHB' );
define( 'NONCE_KEY',        'vW|0BkF)HC}rBTURHAO7d``P~?.hk~kASO3yn<(0bzi=;g}auxKN4!gI:umrtg0k' );
define( 'AUTH_SALT',        ';Jm2PW#VJaNvbdheqq3k{%t_44{cOgGF6Jug$JTw(.-H R|=dg~Ql7e^F*4aa31*' );
define( 'SECURE_AUTH_SALT', '(}[wEKx~D5E(~8=MrLR#qnw25d`I}JWcdh V9`qw,RZP[CNg9bVo*16wZ<gTV6Oz' );
define( 'LOGGED_IN_SALT',   '5{+6AmU,$8#DXGF3W_bW0a|VSZH[0+Q!v+1kG /R]&&,*W#kr4uUX9(x&yVafTww' );
define( 'NONCE_SALT',       '8C%bX{MRq.0;6&0uzn`?6%9q<nrG(P8`Pf%!)@o11y~fm#&%<9Egqp[5-ub6:WE*' );

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
