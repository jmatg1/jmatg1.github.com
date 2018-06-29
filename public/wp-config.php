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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'u0198743_dle');

/** MySQL database password */
define('DB_PASSWORD', 'madreg1996');

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
define('AUTH_KEY',         '}3Sk.{a>.>Gj}jq~}qBq^mm}8=b72dCZM![:l[4)D)L^v!O6`cX=:6({qTKy;S8S');
define('SECURE_AUTH_KEY',  ']fN[M#0)G8%_ANX[m@r^i%^v6U8B!t$u%jn}vp^+ a=RCWkCfTzWCMvrnl@+]],l');
define('LOGGED_IN_KEY',    'Tu6 <:ZPCimL)}PB}I4gI9bX+9e@B]6TmpXSD=U<3qW?1$Rkha(_Y]qo7lW$[5b-');
define('NONCE_KEY',        'llr@Y_F6FPDVFNArzbycRLy:jy+a`]#<o01+%3IAdiG%(b44h,?[F7Mz;%ATIx&U');
define('AUTH_SALT',        '$7!(h(i7>N5MBaLXA$zEiHMhwQ9E4RE7P>.{AkjzBVlqD.m^CYr2EYGAUq/G0 L3');
define('SECURE_AUTH_SALT', 'VX5P YNzB,,HHaBOz|1_47>Zay)I@B4<kt iaprQFJKx6y!aAsfht~qXyi`lv/;(');
define('LOGGED_IN_SALT',   'A+n @nSiyGwGtw3VanFZTQ%QW(^UvVx~I]=.92c4Ce($X5Q s]V/D6SEjO<:N]{n');
define('NONCE_SALT',       'QMy0<JyXWgX1037KV{S8;[rQ3JC!#8+go9 1Qm@$A~o>Efbxrz3_ @?7@:,1IcAk');

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
