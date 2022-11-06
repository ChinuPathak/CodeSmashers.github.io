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
define( 'AUTH_KEY',         'RJE<;517n7o6FsG%(I?A6kea6%<[u3>yu6}2F;X6R^`g_$v@vt)`%o[;=oM|?O^P' );
define( 'SECURE_AUTH_KEY',  'lEO.qf9SXZTN!7sIQzm}Cw7kT1jo2?3Wa&[RC$;Z*2H~el|VCoPusDW}^4A>]*]v' );
define( 'LOGGED_IN_KEY',    'ft4@)sZ[ESdDo^qPW{X*o-=y MHn$! +)gHFVCy{H,:P`dV.nO(TeE!Y:416sJdF' );
define( 'NONCE_KEY',        '!)JOT%R?Wn*i=_p.;aCRd>Koc$l` /Cmpy7sH=j*si_*!)$6X+xoiq>:%p^xjTx&' );
define( 'AUTH_SALT',        'w_u<<(Z]Ub23VEIi!r_0}://A!Y^j[GX> zE8fFr:H{3^yVcLdl;*]%U#JpQ%/5}' );
define( 'SECURE_AUTH_SALT', 'EB72g*sIn(4%OA99O)3v.K>;R+Bb?RfVm~mk2hWF13f(TA-DWxko4w(K/_H6tbF|' );
define( 'LOGGED_IN_SALT',   'oUS-L7^T`^ q1P+ri kq4V%Ti:G,%tcbe0=n^IMFV-s~MR+cQJ|m$g9J6H4WhsTP' );
define( 'NONCE_SALT',       'qjf5vlF}T!k&2C80 +f-!mdp9rM|_*Sx,zzF%~i42RVtoM}hi|?O+zux _?yo`QZ' );

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
