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
define( 'DB_NAME', 'wordpressSample_db' );

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
define( 'AUTH_KEY',         'g;F|E*R,#dCSX9;#>;mO-z:Tk1[hQ>K@e2Sz$}97IM.Y/z1M|uac oTQR4E=T05t' );
define( 'SECURE_AUTH_KEY',  'I%t$GP4lcue`WT0f#K<mH!&L4uehnb*,fIe6?(2Ak+$LJzAK!t}S33+`3?#Y`IuB' );
define( 'LOGGED_IN_KEY',    'p[?h9dg%G,>]<{[l{<)K@qty6N$f=b 9STybS-UcZB34g[PzM!pS5JTm2SKuZ{Os' );
define( 'NONCE_KEY',        '~_O0H=}i.UYBYr2,!N;_7l<WC$lnT&9YIiV]AOTML4uFY1z$SP}tUq:EQ9($gc_E' );
define( 'AUTH_SALT',        'Jq|&gKZVY*!$L9}LZV:?Z|on>Q=6Ni4h6.O{&gs]+8#yH;lor[?Zw ]q$.yVq(_{' );
define( 'SECURE_AUTH_SALT', '#bl`Eb4yR^ygJO4>x4^!.Q%bE]@DZ7r82*ee#6af~6|P]v)X!zf(LlgekYo#ByOu' );
define( 'LOGGED_IN_SALT',   '&0*#0$$Jh- {cR[1 c$O^UP#_EAPlnPR-?lnI1h@ G;*=cvLN SyFDXD[r8i*5kF' );
define( 'NONCE_SALT',       'u,X16Kj/wn1e#)NB^?u>1UC)QUny*g2Emq:!>kHEqO~>?[R^JcxKna-FrS6(owun' );

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
