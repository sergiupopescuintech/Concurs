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
define('DB_NAME', 'concursweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'E~!q=;0e18;CE.hzN2)y0O5/o_;YfG&mup/Z8YtQf2]bv,h^X)Uf<8Pd),nXx7JL');
define('SECURE_AUTH_KEY',  '=!;#LrlkK94fReU~=8w*u|lx99RVl}l;*U2%uh1O&vk?$Au^L8XTn5~GS)^s>KO6');
define('LOGGED_IN_KEY',    '/SS4c!C0Xe~D,kS=DxZ_%S/%xw<7&xuzcP>1 Pc+O2B]K;_PEjCHjFy!sbfBMS%5');
define('NONCE_KEY',        '=[h*M(=Ow+u],KG E4uou015:wSJ0szAP2DC0t7Bg2^k>00=}E6sE?3:QR=~h0H`');
define('AUTH_SALT',        'NR_~z&1)Tzj`hh+K&uSZc!`zw49VO|h|F78a!+6FuxwQ^OKw~1m4-JeN61*i_^[}');
define('SECURE_AUTH_SALT', ':eCX=0VyC#LW]Ck|<L57%&*=Y9*`K/C61A+4Q!VC@AAjWsCA_xg%xEgC4ixbq-0;');
define('LOGGED_IN_SALT',   'BG0Q=$Qn%o b_E .oGY3.X>,OI}b~8s;83CWZXN! :ft+6m9LPIpEB@hPqL;5P69');
define('NONCE_SALT',       '(<;6,mo+:S]OR282dM9et2*5#BYoLFJ;+1HD[?V$V.W6Y6W^Yt{`>/n%~n@eM}1k');

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
