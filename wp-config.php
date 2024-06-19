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
define( 'DB_NAME', 'drone_id' );

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
define( 'AUTH_KEY',         'Cx{l`*H%(iHI.wxDNyu8QbSo!gCdLlt@!%NOQOu4N7JsS^)LEa*QJij+Ve/|iRJS' );
define( 'SECURE_AUTH_KEY',  'l{Tka*~{Fbq-I+m+cL3cef?i(j@>DU)?R+#,JSzUS,!1iGHaEe=&d,X}4$5h}p!u' );
define( 'LOGGED_IN_KEY',    'dAbX`Vn#2^sQ[RvCo2mD9Hy5+pM)B_Y<+9. 4=1AhMD{tGIU[{-%o?$BC:LgMC>1' );
define( 'NONCE_KEY',        'd[F7l 5^2Fx&@81QGrIGT+!iB`0V:JuyiHFX&n;FRA&Zp+m_t4=907%RB^5CXM~0' );
define( 'AUTH_SALT',        'x%cu?SIgw~xv<p~EjK9&+is=Dh&4j]+Dee.w2]^-HeW`#no[X|{=`Q)bsb eBd:z' );
define( 'SECURE_AUTH_SALT', 'I6@nz<-_zyX{umL{IaHIdhWmD3pnLHU#fBuxht!cBCRz`#UKUxyx%bAqZ $1`M9h' );
define( 'LOGGED_IN_SALT',   'kt};Sw5B7F00?Dy%io7T?-OQ1%:7L<hVbOPCu4:A}5?rq_!T0z%/Jb$m1,JZV$?,' );
define( 'NONCE_SALT',       'lCcqkjLqQ&UTCY:F*9b;x`$im92O}G%LEJ07F$7&skd1}L))xM}NY_7l5r-{ANBn' );

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
