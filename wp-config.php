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
define( 'DB_NAME', 'euroflo' );

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
define( 'AUTH_KEY',         ']opn2nNcN}QuKN (N`tMZYF21lK}iMKK.!k?K^0*fFuVNESPBoNT6h|V+%ZKANo/' );
define( 'SECURE_AUTH_KEY',  'xq07RN}m29|jo1TJ?3]}3%C7glX>6G3*4281Z?`/gPxfjk, 38z EFgKf<^~q>!s' );
define( 'LOGGED_IN_KEY',    '_E_5HBei_1qJ7)WUTcmBa:@X0L=wx/jLog9kp*bQr1T .B?^4S!_>Q[tTqV7?Ir(' );
define( 'NONCE_KEY',        '(GzroK;a!NOIzsj(v|}cnIN2|UxVp~^.b:;/+rygS9:L-Kv+M?oW]fwpoYVB7tR(' );
define( 'AUTH_SALT',        '}okPf3&26WhDtyzE1y?Y8:(xuE2L0 T!o-%295jjvG~w5w?cK//^$$O*&29S]Bo ' );
define( 'SECURE_AUTH_SALT', 'DQnjz^ywo,`^!#tyjboDl__?ax]E^lKg&n Xb%RBxzr5RGca1z_H4[My[V>jT-1^' );
define( 'LOGGED_IN_SALT',   'PqFm03y6lzpDz[xA9UFso(v8^z#]7[zSL{,B/i|Rtx^*n9znr2w)#:Qw~H>A%;%}' );
define( 'NONCE_SALT',       'wV}}^EUm}vfZ_?u>) rz}igvx=sb+WV&__Ps MVW;bZ%ylt/J]&6$9)ag}S,-US(' );

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
