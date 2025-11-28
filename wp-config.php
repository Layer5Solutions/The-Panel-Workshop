<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tpw3Oct25' );

/** Database username */
define( 'DB_USER', 'tpw3Oct25' );

/** Database password */
define( 'DB_PASSWORD', 'kLjXKaBn@nvNtj)(' );

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
define( 'AUTH_KEY',         'lgjn<**`Bi^&i~GvvM R8_SQaO# dd_#&yH1Nla]`U47G:PR}>/CGd]QRXfSon`l' );
define( 'SECURE_AUTH_KEY',  '-Q1Me`1k_{ (NHl{ <7nZzgim&I3xvy$^=^Eu4$C|wB_V6seZ@qZ4V)XDXIkD]xa' );
define( 'LOGGED_IN_KEY',    '-+cRCwDQMXSl12_?UYPo?=l]7e$ITdjFSq:N>)`@zRS{PFqxOpHNwB%#dBcjS6([' );
define( 'NONCE_KEY',        'v3T35[j^=xhb?8oyl)0sLgygPI^7:u-+a7_=Sy0yfV+h5%6NC+Pw>1gTq1|/g=mh' );
define( 'AUTH_SALT',        'GtrgR|ntI2+]y9R-g<$u1&6DX)l5_k +uQs||,IFs$r4hzCML(!4].M_!z)~yvSG' );
define( 'SECURE_AUTH_SALT', 'IGcRn>z:fZKO,[RMcT!NllwABT|9<`lsFD8R;T=n<Ep8MA%)5D*1Z[m6U.w$v`=B' );
define( 'LOGGED_IN_SALT',   'kRp*Lf:2vO0G[xxPUH$v7?JTiAa2Wa$~*1~oT:N14r_3:[`kw_BZI>>IU$%WxE84' );
define( 'NONCE_SALT',       '?<(!`8]u):Fib,@d`H}S$h*E|PW}xMnONKl}s*f.Ua>aPZOiK;*FOjf*z~.ljIPA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
