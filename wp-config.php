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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.1.1' );

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
define( 'AUTH_KEY',         'M8lTx|Xv+B*:n1`{;S.9>8c+/A3=%YLl#nW|vq_f|@e+U+!(K+8OB1L-.?cx7Jyb' );
define( 'SECURE_AUTH_KEY',  'fX2rU2(G-<I!lO<@VqvU^9 omQDI,%1g{[wZv]c+/=uV~p`zga55p&iH=zd&ce&w' );
define( 'LOGGED_IN_KEY',    '!9(oXH+58Y3ZN%mkj~ASg!Se*AGauDCeSa{}<BjIwQ[=VG1i%&_Fp,P!A{;cc|^%' );
define( 'NONCE_KEY',        ',)R=<at 5k>uZUE41:]UDDSIx`BJ~]Qy/bSt#XC8 mX!^~Q>%f1a_W~c4<r97:XF' );
define( 'AUTH_SALT',        '&f+FjnEWCU5XP8!=*#72V<bTc8(kWAw},YI)b:E!]/~!@.Xpp)=Je,Jw7j<VHxh@' );
define( 'SECURE_AUTH_SALT', '#SPireS-A~O/%Y.f:uKA[<.A<?:(dQ(^:m:zBVr%!!=5nf2p:3=Fp&ET:<rhB4)G' );
define( 'LOGGED_IN_SALT',   '=/!i%}Hh98W({GUpBUYl|/v#F#Z-g5K?&C}l|FO@KL6S0B47P=G5z0-X>[]8QhoJ' );
define( 'NONCE_SALT',       'j[s2{gZ,[8{5!5eXlvZATs$l~Je03yoVr~JY[DRV,H<2tltFW#!kxGIdJM9NI/-x' );

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
