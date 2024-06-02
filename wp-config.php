<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'sportium_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mariadb.local' );

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
define( 'AUTH_KEY',         ')BPfGbgM6Rb $y[/+g^H?KqPZES/Mw?ZB8io.v.3$VX^-*&>q05[ Zw+,PYswbWc' );
define( 'SECURE_AUTH_KEY',  '&>>>4MBaV:$#bf`b!7fd 9y_ZGa}!:pL]k*-!,,e&VsP;P%sSRl.:Wqh!<hm_Z=A' );
define( 'LOGGED_IN_KEY',    '?s*7Vq!?eaS9v$w7|PCFhYlx@95$01|=^%?8_AH(#7[nI^oO,r>w,%;6#aJ;b_~G' );
define( 'NONCE_KEY',        '%UJ[6?^J.(fIc1`!}JahE*MfMH~fF:0w0vr0#WAw2fuBb|}d?cl!];yc;[DY%R1o' );
define( 'AUTH_SALT',        '.O:A#cn}I6T02X0 {rc-XS4]J,W2+ii, $F0u;K^rGqy$;-xJ}E8.Y T5mMihjf:' );
define( 'SECURE_AUTH_SALT', '!6!PH=^42Fc]*b.5=A$5M6t)P2rDnC(d~J(9NzR;<c:e~TA!}9OdWY2;<Eh?m qr' );
define( 'LOGGED_IN_SALT',   'mwf=$)TiyoFrdg-riac2{`okws<Gg9%w+HJ*=QZ<-HP$;}yv<Pywy_T|rvpuEx<1' );
define( 'NONCE_SALT',       ',5uEUNg7M|1L S.,r@W[Xs/TB6}l2K:bZ&V4P~AjU-d Mg<sr/~t`M3d|H6y6M<Z' );

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
