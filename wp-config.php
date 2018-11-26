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
define('DB_NAME', 'web_agencia');

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
define('AUTH_KEY',         '[!d6Hw)8F~gQ/&o<H#,{%;|krh6I1($oSAuP9Ks( bt4hQg=b<IE:x0M?aUUY;`(');
define('SECURE_AUTH_KEY',  '5A&xBIM)u%~OA/X?h/q>ekj~IyPW,Fy9fu-<jflfoR7]{cN4t%9_6#*o6Nde_3_e');
define('LOGGED_IN_KEY',    '15nW6{$Cxq +W.^ni(rHU5$33^;YSQ>}{i&lIH(8m/EE0pziKPwlju+J_FpYacTR');
define('NONCE_KEY',        'qH),e<XAA#o1-nUjB#pG&~6#4mPGg@JU!+4%97h+pPTe:l]4iO](!NWKu!.(qeYD');
define('AUTH_SALT',        '(f#Nm48))}vUUV^z}oa<M/qTmmfHO 3<kT&Mt+nu1^vn|QMK3u`r?~H!yANqBzel');
define('SECURE_AUTH_SALT', '5YSf8?@E-2@6+u=z.M*ZvF 6eGMy0]3|:!4)-,cNBQ%ah&/[mKfgGY@2+%.;kE5w');
define('LOGGED_IN_SALT',   '{8?8}4~7?$kYfPu#*lhYweu,gFgJqZ5$8P:v#^L otYlBThnV5?b&n0<;pWX<|_5');
define('NONCE_SALT',       'ID5T VuVe?)>x[NL%w3<Hk=YMF_1kfV{Nhf~/q[_4HQZ%A -UhjkAje&U#5,foXl');

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
