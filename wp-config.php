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
define( 'DB_NAME', 'gcheng_mmda324_final' );

/** Database username */
define( 'DB_USER', 'gcheng_mmda324_final' );

/** Database password */
define( 'DB_PASSWORD', 'Bk3,.Q;NbcEJ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'T[(LeXk<g=Iy-nU5&c<3H]X6q9vXY}L;`{u]63gM9- DW<aM~%>T.0T6)d[G/t=M' );
define( 'SECURE_AUTH_KEY',  'dUt09}oyPdZM3oFETsOAYk.6*j|.qr|my<Q6[0,IjPwtX[ zJGM!HTeKN{H&nn5}' );
define( 'LOGGED_IN_KEY',    '>_pQyepTtw$jj]@qqCgM4nYg7N72;J`i;^8~vuKZiM-[  ?Cb4^D Hf!^+7ga%)A' );
define( 'NONCE_KEY',        'LW=L=du(V~hV>e5.-u7B5ALQD`o1K}.Qq_#IkoLbXq7[>hl%Su.}!<}h&FYB9#MD' );
define( 'AUTH_SALT',        'O=E!l<@7ts j)P$|EvKum1qmLu +gN#8]oxKP>gAXR#o_xc2F9G&ka4I42FQNW@3' );
define( 'SECURE_AUTH_SALT', 'bhC>]wRldegNu!ZxHJOk>Gw~b@bqcc?c<aVq!;5jFvKtl+&~!AI;HbQGcn#<nI@j' );
define( 'LOGGED_IN_SALT',   'EIu;K3MtdaP]vwxtb`:0/gGr7l`Qn}*RqOMOo7tAgOR9AtF<?aXcRM]Uv,-@ec64' );
define( 'NONCE_SALT',       '-]JEX(oY}HSdiO0/P#Y1$HES+SNfGsZyL?`s+BPj4w _oJ,]n @Ar];ZKMQL&AiB' );

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
