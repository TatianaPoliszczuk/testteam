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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testtheme' );

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
define( 'AUTH_KEY',         'B}04lMxRsE;Z:k:#xraOPBz5|xfb|B8,Y%Hp3:P0S#0}F@l~qjKZ[WZ-zH2fdd4u' );
define( 'SECURE_AUTH_KEY',  'QX>)uR1u@sV=)MMHg6K>zVJ;PbgTs_]J.LzPfW]p:h+7BrX{K/75!g8QrAL6tz5<' );
define( 'LOGGED_IN_KEY',    '{&NPIa0K2.E,jHP54O^{o WQ(SG}7bW@s>+< o78}qF>8DOoC(A8W%7$;UKZ9)ed' );
define( 'NONCE_KEY',        'flNs1%Cy>adqXRRu9J@FupFx,+1&B-|Y3dUA;:ClQg0CrlLOnL(G2N>q.%NpwK2+' );
define( 'AUTH_SALT',        'oFF2}o0R_:3iObJUQUx%Vl^5sN#717|90Q6V)>EEPf).2i!lIuzi5(Qk,6&7TS>^' );
define( 'SECURE_AUTH_SALT', ',+AW>kOnz_KF0j%nCgp*s7ZA_?!@N[,8q%N= A59K]G}Ar~Q0=3UUISJrg1&2gQB' );
define( 'LOGGED_IN_SALT',   '&^yf9w$Ot|./.#OeBPO[BK&?/_vZ6o}(|@W;Ci2k@AK6Wp:L7$p^3AIZfC=1D2/%' );
define( 'NONCE_SALT',       '}hwT=-<RkI}-38F Xk!&ktOFW>;[k.N&tXYr*E=)@8-7#&g[)J`a!PM8/S:^lorD' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
