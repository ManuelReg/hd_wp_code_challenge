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
define( 'DB_NAME', 'hdwpchallenge' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ',@YY>jf5ZUcoC3,#L$mLOpnZ{qr}2n=ID+:c0]JA=U{x1oja+uK{*DQl(GTP|(b3' );
define( 'SECURE_AUTH_KEY',  ',Wqjj44D<K}7)-I{@CCCn<]t{sup%{[T!.# =O<A,XWpvXEKo.S3KrtGPijN0VND' );
define( 'LOGGED_IN_KEY',    'k+YiiS.l:cp0!@gJ1WUu7O+=Woz}/)Pt~kygw2^f#dpoqL`cQh-2mU@ZZJ(]/#xQ' );
define( 'NONCE_KEY',        '/Jtmzv3*H,~(3UoiPOWS;fxn=zu)TU=/TY8v&?d4?wwjFZ3;APRjzbiV]R eUW}O' );
define( 'AUTH_SALT',        'IStfqhj-+i3Fy<N.0m+0~p sIbN?;yxZjK65/(<G5G)2g`/9%iHB{4/1[zqPj3W&' );
define( 'SECURE_AUTH_SALT', '6$(t)~o)ncNZ&YN9eYWr(@|Cm<7!}suJqGUk 9qjp+Q*lGgmLAGw:QsjEkthHhX`' );
define( 'LOGGED_IN_SALT',   ',re]7ME(67*j8s_(,<%Xv/l@_Iyr<!}]k/r7hZVlk*k/=jrh^f]c$x,k__R_LBGr' );
define( 'NONCE_SALT',       'el|2MNonZ)g]~IZq`*Y*de}vIl[>6:|:#s9^vVbtB?Q7x-QCN=8ZaI>YoG)3Z~o|' );

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
