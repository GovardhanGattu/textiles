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
define( 'DB_NAME', 'govatex' );

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
define( 'AUTH_KEY',         'kMMk]iSg^:AKn7VI4*8>P[,5{G~]pEH,WOd;cZ{YA.@Q9W,mg|(eBm`i%6R*Pn>M' );
define( 'SECURE_AUTH_KEY',  'L4WC<jpQDjJZQ=$7e,e4_,rTF j!M%!g`!s5yg%{[>Ck(wMng*E3e?_19AX9:eDe' );
define( 'LOGGED_IN_KEY',    'h=Q2BNOnzfG352payX>hJ</,uN7d#Z*Bza:4DO!>~q<uW:jSTrr*U MD!rWwkW(}' );
define( 'NONCE_KEY',        '/XG?Jk,+)?$%pn$;h(a4xD$iMGYsN^32.2/7eS3fbg]<RI__J-Fe}h7lfS+N,E@5' );
define( 'AUTH_SALT',        'G7aNS Sa>ukyz&8UW>/+8[Z.KE6+5L93LVHgwhPA!/8^}`yAv=q.@lcHWF|{(_ha' );
define( 'SECURE_AUTH_SALT', 'gQ<NCmtyPmaS1YNo,PW!2NQ?5ZL,[`2yMLq!uO_cs(aK)mUwO}.55eF{2G;Uy9M|' );
define( 'LOGGED_IN_SALT',   'iw+.f(l~)Jxp)TU7]LpahiPAAo6~G;S2RT% SKkWJu4!xj7L8KBhGNABNGeo2,= ' );
define( 'NONCE_SALT',       '1K6TD692qjYrg^XXHu6$ZBwW1XcWl2|UYqr[ys<1>F%J}ry0Wp^R|t3B44Ha?Zrt' );

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
