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
define( 'DB_NAME', 'film' );

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
define( 'AUTH_KEY',         'G@%H.;j<>>OQdRC+J$A/2<2$qFo%s1[bwRz0sxvtc,r<uk1Q3NCa/kE_Oot4V(qH' );
define( 'SECURE_AUTH_KEY',  'e*.8yB~WT5]1c2;7-HJV }yh!wDU)([0dPvd3bkn[xE4XCzi|A7uF[@OfQj?FrCc' );
define( 'LOGGED_IN_KEY',    'FD~<7|Ahql;%#z|Yd96?=DF%KkcHoiB;$3;6D$i)~Qei3{ca3=tT,Z1Cb7+8vz:H' );
define( 'NONCE_KEY',        'ZkJXM[qx&s}_l^>#),Q3<Ven_qyYWLym$^9WgIwCjc5!.tbZ81 ~{+2NwC+52[C!' );
define( 'AUTH_SALT',        '+/}06&c@{(3(~]_-[!_dDTY9<bx YDD9@f:[><stnA2#Hu!8&0|TYA^8ty[u/q?(' );
define( 'SECURE_AUTH_SALT', '=tWnOX>L~.;V>&:))2hJe5gC~W8:HH=?Qj$a0[S)eIZrSnO>Ex<TVw> 8-A{A4~C' );
define( 'LOGGED_IN_SALT',   'i46]gV2So4<{Urd?NmbWE$D|(DnsI*H|/sp2%C{Gnx&Ecz5RM*$pAlRnU83mEG{6' );
define( 'NONCE_SALT',       'P!YDAhGKZ:b%.@{9t$&fxXVXaWFlLyhslCIFij,]<3O@&B>4)y*6F9 w$)KIO~%A' );

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
