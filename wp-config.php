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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\Eleve\Local Sites\web-roofline\app\public\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '|N$ n+!h>q8-iUa&CQJ@yW}=UetggC.C3%#>w/c ImIF-nbq9ALA=^!_7{{&`Y`-' );
define( 'SECURE_AUTH_KEY',   ',pm=6o=-i$*4Cw}o}Q{COUH:Hvq^$LMsI[=+Ih(*d#@T{tf6VwAr#C[}[<lk+wdD' );
define( 'LOGGED_IN_KEY',     '!vZb}~[B81L8=<#IX-0Vg0D)!5Qxqh-Ym$@Z=_o,z20|!*eQt4ed#FYzReZjOBf(' );
define( 'NONCE_KEY',         'w)I3J}0a,fq/7cF7c_}m_r:d<oP88+ymIWGpE0ucwnz:p4{JPTX+HZs^{-Ox.2V?' );
define( 'AUTH_SALT',         ']goz:`U2iT1[3rE.7P*nXv%,*Vi.XNO@}n;HwL>`z1eq@U-cl19gzoCPVw7)ebw*' );
define( 'SECURE_AUTH_SALT',  '$y0OJL-hU8]8w8vuRO],X]Ap}h^eV[JM[!Wo0WYtrBaQ:ECQ=%p|)q@&xWct^3VT' );
define( 'LOGGED_IN_SALT',    ':qE~/4Jln%8;#8E`24@6(TXgtdt!gRe09OV_#$AW6DY]Qfzf0%WxZ;~(2KgS4N6~' );
define( 'NONCE_SALT',        '{(]pNc[~3S|_Gb@vX}b J+,`$iR}fKpm>=#W,.Bo-/xsPS77iHJbT5>Qnj6+QTe>' );
define( 'WP_CACHE_KEY_SALT', 'OHv6_C_i^0Tp;iFkmPtl4l(d2Xemm)3uITH@/0ua)<%q?wp=ji$o(2H.Dl5NKa#S' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
