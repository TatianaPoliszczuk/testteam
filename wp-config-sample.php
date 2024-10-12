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
define( 'AUTH_KEY',         'T CTs<xttU]rQsDeAO1~Vh^S*A.~W]ayF7|=uvbUBaVQRwG*va.fDLn[&f*1V(^a' );
define( 'SECURE_AUTH_KEY',  '+JTKwiu=}0&i1V?e^hxSk*afx_[bR+?/[S$]7n1mqvjrX&*hj+Qo $Fc9FqN.pfH' );
define( 'LOGGED_IN_KEY',    '>pk7*]~@tX3l/Ms=m5ME*!Xk>yQKEdf5k06V5>J4-ar~3JTS=(vPt?N9!TXP>Bd0' );
define( 'NONCE_KEY',        'tdZ^WErUae{n~!KnaRtm@2.@z1lmwSYSz CX#q|qf~nu@o=eW7[`_w.Z=v)hr Tf' );
define( 'AUTH_SALT',        'M-XG~^$./ KP D42whYAO:Su$P@-7]9w.7uWcv0XPYXD73d%4GG.0@X}.RmbwVxd' );
define( 'SECURE_AUTH_SALT', ':?Q{UKwW.:R+`fhF*U=S,jo#*ZQu}ZwICkf^Mxw>5H_b,M$={tT0JGcR^y1=>P1>' );
define( 'LOGGED_IN_SALT',   '!E)_`kBowekyEe E{6}Qm#*Z#%p=[(t+p;T/IwdR=O8}s]H)X2HFKw#[z(+.l??3' );
define( 'NONCE_SALT',       'HU0yn.oBi>O_S_R4dU$>2RaJ[r&VSFjD}sd gako!K<s#Eu?V2#*iM-MvbTJGWF4' );

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
