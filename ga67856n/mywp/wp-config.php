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
define('DB_NAME', 'mywp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!=!c5*SR+u+E`|2CRDU%Besd5JbI^QDeZG#pw51U#,+:E)]c=(KHbJ3&;7lb(QVz');
define('SECURE_AUTH_KEY',  '`c14HC[Z^1ja_B|6$aoZ2q7SXN[G}?htfAh$2A~Lp49+-n||YdwiNNJp@9Q2h5[v');
define('LOGGED_IN_KEY',    '-LdEH!ly;IboA+iH)_{t?i1o/+V0E$j4%b%S.-5L|JLDLHs1J<L5Wc|g-GemV3W7');
define('NONCE_KEY',        'ghBA|yTcv8}%g+`+|^2M*:u3yj>T*?IU`/_FNqraWkYDvE.fS6pEO,u4Qp4?vHX$');
define('AUTH_SALT',        'yp]q}_k:E-l{;#gYLz-9c#vj-+9d4g01F~!U8ct1H<Qx2>SS|8Z1`Ca<#i?h}b:c');
define('SECURE_AUTH_SALT', 'qz| v2TSHtIh?;1?G%|5W;*I@2g?8 ]lP70{VO z[i_4hYPi/j3?f+l UkWCWqiI');
define('LOGGED_IN_SALT',   '%%]Nn<F[cW[*Y-c95%8d|UXF6p|BuMOL8B@knvA]d%&?<}~|Wvg;?`oA9c|PRV]T');
define('NONCE_SALT',       'G0Dn~$P#++w-J/-e^5S=gJ]i`<efYl#(EM3ZIF!-g+k?jh/]BA(L[(+^-Gn+T+yG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
