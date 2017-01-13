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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'riku');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dinko');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';uG}~p|{k4sYYKpku?yv.5FM:HOC BqY<?sUiM&:^|H5QkE!0tEvwv+/,#Ri2;Sb');
define('SECURE_AUTH_KEY',  'cIQG)uKO[v:&6C`WCOz:H#KAte{RT,I+xzcb89n?VK}qcL1FdOX1Dq!r52sQ_!&j');
define('LOGGED_IN_KEY',    '_KRwuhIydlx]7og0>uhH3-DTL8Ktk^MKIz$Mo#UcNjXn>UFli!D_l^e_L!8moM(M');
define('NONCE_KEY',        ':Y4f(J&?xDQy/~5fp>?9Dv:FsD8ZEJvm0).0l-Bi)y5T[.dy8cr*[LAE>M)<6xS*');
define('AUTH_SALT',        'gQjk`_@ vG|f1Rxk@>unhZ<ri+I8mtW$P)yHAl%bw(r<=6h+JY|YI]agA<vE!$<4');
define('SECURE_AUTH_SALT', 'YYg|W@}&-aM3bV+++~fVpXV d~U=t/I;)7,J31*KXa;nS4ew`dEgH4d<#tOt?ii1');
define('LOGGED_IN_SALT',   ';PLT50bgoRk#E^fb@CQ=vA#I7tCb76L-@&;Y8dJl,KNV3z3+,0Y>p[MiSR.nS{aW');
define('NONCE_SALT',       'ws+)>sbc{D3l=@^..SqeL7]c`Xr>xz[NW!rf0p=2R<* #&S.vofwn)+eRLjz_PW~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
