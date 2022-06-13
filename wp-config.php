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
define( 'DB_NAME', 'newwordpress' );

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
define( 'AUTH_KEY',         'R&wMCdk0[P3R_xg>rjc-LTI|U7_I0N4|SD#;*ZAwfqk=P+E$rYYg)u:WICTf-&,8' );
define( 'SECURE_AUTH_KEY',  'y!55)bN[`g)2`,~U?5@rC0`hwL7__</<|DO-aDIkF`|a6lg5|4XtK]:HRutqW9-m' );
define( 'LOGGED_IN_KEY',    'BB.P*fxQjh23o(]3z|:V;6L$!r3dZ2:.Kmu]D`f|i(*<XeI%f2av.AaJ~N/b+[Kd' );
define( 'NONCE_KEY',        'xBAbM1<PiWJuEQhTf*_mh)FG,k5cvk<&8oIB?XGsa6-b_[FcXSuI$5I##?51?&!<' );
define( 'AUTH_SALT',        'zIiI%*3E*=SYFy=i<{ VOO=%%}o}cUxeM!9uOd/vL$^OOoz.6DGh:05eS4C,C;mu' );
define( 'SECURE_AUTH_SALT', '|+<^8rn_dB:F/JvX?g|(A-aMsjPsp*k}_WI:={d%/3vuGOLla`%o8slx@!iLB$$a' );
define( 'LOGGED_IN_SALT',   'L$;AmbO9&%NSFP!T}bwUW$1Tf/T%cK#JvVnJQDBJDO<O:UOjtbV||:$r`4>3WK(a' );
define( 'NONCE_SALT',       '~Gi8~ybNRtI:@I05_WeqE7@:4MMA~4W1w-!a}-./bw IBN*H>7<Q[RLaH(d:@;}2' );

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
define( 'WP_DEBUG', true );
/*pour voir des informations des debeugages */
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
