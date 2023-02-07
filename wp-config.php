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
define( 'DB_NAME', 'comfortzone' );

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
define( 'AUTH_KEY',         ',2;!L$?/H$#;(^0Gwf(;,=m[LTx(sgxIKh3p~.X|lf,RJGk|gN@nv6P2E7^w.vpJ' );
define( 'SECURE_AUTH_KEY',  ')+W}ay MH=Nb6J:CbVQ+7r7 idS`_kz|<di5K0t[lmOYTR9zy_5tWW6Ym}N2I^f-' );
define( 'LOGGED_IN_KEY',    ')6M%6NpxGbb,^g|2&uqCKP9`h~[Gu?{kV/z02W#Eiq%6x1W;MqCRX/bX#|OwZ<p?' );
define( 'NONCE_KEY',        'z45vtP5Mz1`+Y3@kF [(_~zA@b3BZ8fqWA.>@/Htg50 1X)~3/*v=o;9Q^_Vj&f8' );
define( 'AUTH_SALT',        'zH%|o@O.HJw+14J{G.FD@g*jXt+Bz,!;;>c3r[{&M;t_,w(Rv9f1YT:!Oq=0d6n.' );
define( 'SECURE_AUTH_SALT', ']9XQ)fj~T>lhNMn<h+w}Fd;Kz]Z%tML#Lok^#IFTSL{I.z!,S([s$NnS(tg}%gxp' );
define( 'LOGGED_IN_SALT',   'vuzpZkHhTx)Ez)}r_wx!(/m 9mqr:^qtFd=<byR1kgd5xcrWha5$*~+~>q9Qk6`b' );
define( 'NONCE_SALT',       'R5-5F3,N2]B(&LHS!v$tp2wtJ9L/[/If<D40l3yM(xZlY<UdH<DiHq37W/iH@[Z+' );

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
