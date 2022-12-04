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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '94h67)`kdmDu2r01Xq_oG]KpZ.}m BL9A%wjbFv1>.VGV.lXve)B_`*j_%l;F*tQ' );
define( 'SECURE_AUTH_KEY',  'V:Q[..:0;PI+~A$h2VuO{Bde9=^7zS.WyBwR3KiHtF:}v|xG(FirCE<HlKP2AI;-' );
define( 'LOGGED_IN_KEY',    '+$9)m3&l%7y:~72byc.Tu&.2i|ZZ59-7ss=b6o6!XawOPp1(bV$LXW$$[P#yI_M+' );
define( 'NONCE_KEY',        'm7lr_z/Pt-V42%)mkJd9i1V6+g_7?t:V{G#_!w/Eg2tg`DM;9zOGv?d`r:X=vQAs' );
define( 'AUTH_SALT',        '#CZ|VB@}~>.=`-Z9+oO 7iK>SBZ=V4*?z@{E0eU:^HlH{+jqv-nHi4. 9V;=G%R`' );
define( 'SECURE_AUTH_SALT', '+cJ8umLp#7@A|*4z0:9Ux,yNzthV<DxzvoH Kx3m|d@1B5e^l8RbW0vOvDPEG{AN' );
define( 'LOGGED_IN_SALT',   '!)_8` a.5TrUF).f_W<,y6v5N>.CiizcyltKfqqJI>RE?K8`gdRHY<r?RPrzH79.' );
define( 'NONCE_SALT',       '/QQM(-;?y :@rKpw1a[o:kojKiNQ/K<TiS#k4=P)~E]uB1# jyt<=+TKA=;G-g|;' );

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
