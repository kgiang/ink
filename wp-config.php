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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ink' );

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
define( 'AUTH_KEY',         '(.Nf[;1]@Jn2O}#UZSDFq#Nr#.LH`ZbyQ_*8&2rkDzFSwNr-acJ/Uw-B3a|WJ0s2' );
define( 'SECURE_AUTH_KEY',  '>~~v4~w-tI,CI~bGi2[!C6bU8WDjR=6~edE& y[$KC}q@0r6ynqcm54WHQCwxIiY' );
define( 'LOGGED_IN_KEY',    'byz[iU.y}7qA<yyD]Il*Y]~F} j2PvlL!zepSo|8Y`<NHM0)]U>6]ESC=~ w<+]F' );
define( 'NONCE_KEY',        '78yq#TYI:L$1iAW_dYvH/}ySrhZ`p~I#o&=Cq &hL7=`(zH#Xy:`!)*ppnCY#;/)' );
define( 'AUTH_SALT',        '=fDc{@wCyg*.GR75kT@xRYDhBSQut!c|(nfR0Xo8,gtl21jc 6LELEH%I3!tA24A' );
define( 'SECURE_AUTH_SALT', '-~&+MS_b9aCAq]Q4Xh!Q@78Ra@b@oYDY,&ki5dwM4@lE5oaMl?|1)BKv?^7G@-u-' );
define( 'LOGGED_IN_SALT',   '@M(w&#Z}.##]G=1d*kT% zEgv$0`/+Z!Jn7bp5/m#/sXrJ[B_1>tkP<13#L:R0de' );
define( 'NONCE_SALT',       'j+GTj_^PxTtjFn=?U7@RJ<hbGu_i.(PTqd*!UoAw%2rbm7m?bgfvkIQPVvgl D#Z' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
