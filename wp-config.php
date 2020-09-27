<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maharlika_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ey(6xsJVe$F0Xr_Y,e?G0>kY$R`x*lNw?+Eqz^gsTp5G!o+b:1wQr6}jY,W|>_e)' );
define( 'SECURE_AUTH_KEY',  'Ivu=CyiPeaHPyo#a n} d28>(SsC+?.]O!J;MjD54HPs P;H#;QXerM5Vrb!8LyD' );
define( 'LOGGED_IN_KEY',    'C2B&QF*;vk*Gr)t@cx3:#9^R.:`LD5QIgEb0V*Pgep`mb-eoWTgE~!c>)bqdE_pU' );
define( 'NONCE_KEY',        '+|?=he~XM-.+lZ@&&?kNYQ swO~[!y y<y@tcHe1d>I9|DX$|C794>N(G+bG6/Fh' );
define( 'AUTH_SALT',        'd4(M70F[HCXx-jx#ivFB$DRj[o?Mn443m8@./VQ0^{0nU3zG=_a>=~2$]nL^@BCE' );
define( 'SECURE_AUTH_SALT', 'e:KjMNvzxty2=[__iWk#2}Kx51:-B^*gFM*ydD<( )F(S8jv5<%Btz24#f4k2gIc' );
define( 'LOGGED_IN_SALT',   'ILpT>6(0p+ &^/FyC_C2^6]{)Q;XX!#.Gt5Q[#Z))785Ml?roc#JK}UlC[][UcQ~' );
define( 'NONCE_SALT',       'IO4f17jV|OfapW`kq&xVu7qHjpp;A=^o=<xn9i?AGjn?xJ4CG5yF7kyykwA0nSJ9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
