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
define( 'DB_NAME', "{{ db_name }}" );

/** Database username */
define( 'DB_USER', "{{ db_user }}" );

/** Database password */
define( 'DB_PASSWORD', "{{ db_password }}" );

/** Database hostname */
define( 'DB_HOST', "{{ db_host }}" );

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
define( 'AUTH_KEY',         '4*Sn};`cDDS=S&m5T5~^GAKY9jy=ssrZkjMHFq2IkI3^(H]FWV}$31URHL~<8=V<' );
define( 'SECURE_AUTH_KEY',  'n[*|IE]@wxx0XK>_@BWCZ?q)(+*TS=6X:p33aoU8T kKrl}{0t#.W&UR/VO[_Zw9' );
define( 'LOGGED_IN_KEY',    '=/?54&0B<1Q].w=wzqE<zC!Ddn3^V@rq>d0H=:.0.@C..TRn>73N721&=Ts)6tQ|' );
define( 'NONCE_KEY',        '$>mn!$dMXDu]snM[>#~0L|X-ldQM./fsW[T}&V]vp5X7:pN)v05+v,sseEqt}>n)' );
define( 'AUTH_SALT',        '.PnhT+Jxz~lmE[)_RG.P93m]7zLL;Lpd_0JnU>3~/bYBwY1(^.acG9lCk:d&,!' );
define( 'SECURE_AUTH_SALT', 'dCWEO8{J6D,U`!Zy9JYGwhEoIm] l&=j$z,h^Ptp*q;ZVu]G ^BwVV*(Ab_l!T@B' );
define( 'LOGGED_IN_SALT',   'Q+Js[+q]Fz|r)qDLPp7)0~5z5j^[UQ[TVMTKlucW2H0Ne(?grqg#k>.;7=LKtM8' );
define( 'NONCE_SALT',       '{uVkdimAtINKtQz#)YNm+#n?5l#bb[M[8-|d?BJR(-Fu}kZ))0SH:,>JKvrNX^m' );

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
