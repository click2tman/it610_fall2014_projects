<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'TheNaiveCreative');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'g XcCH(7|0+KqoKig-&a|+H*P+(m<# =+BI<}31:)#N}Lhso? t[+]U}o-R)|F+_');
define('SECURE_AUTH_KEY',  '8UcE~mnrFJb?I$2FFxoUWeL`b^Cj`e0$_f_5gn:pwqg;A7l/>Oa/_&.PsMqV^f3>');
define('LOGGED_IN_KEY',    'sg T#[$C{MDJe5Rx+.YUj+;[v+P,aiMGf:4}9mbx-50~`l}&vI9W!~~ky)<)*;1W');
define('NONCE_KEY',        'Bd:embloQv&{qJYngu*^,bJxb.0 [ugc>8yZT|_j-l]j~35UL>8CB4m0;M|VVj6.');
define('AUTH_SALT',        'K[| /gPQ[[?gn/2G1!f=5sgOyET{CWQ)T)ZVG&=B37`,ZP||CbGKG}Y!-G7F((l8');
define('SECURE_AUTH_SALT', 'tQtjTE!o{WeQkZ|kNzY86O-Q}j<e3OG2(!<q7C|9+ap_iSyJfy+*wh3O|ms8^AZL');
define('LOGGED_IN_SALT',   'IeMx.4P_0?m&<_[Dw>!>T>SYxy&4G_!m3-74ouVLyGG8tn,xLJAK&2[5 ;|bA+!=');
define('NONCE_SALT',       ';`>|&V}[]p8`R6W*su=,T2L-9z&wxAAICe|TBJ=ugIQeq}[&5u`.41K<p15*-Wkn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'NC1_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
