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
define('DB_NAME', 'indosiar21');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'b7 H<@TW4Myx;eqJ-&-q-8-$UXC^(5u_C/[Q$|!ZPG3RDshg+h|xL)NoQyd<%7uH');
define('SECURE_AUTH_KEY',  'kUShO$>9,jdCq769wwH3CSOD>~PRo].FG|yOui869yqT#)+tAd9RH;~uvfqX;4v/');
define('LOGGED_IN_KEY',    '.s.br=y!+v+3Z|oi(u^Y+ qz+T?/?vgz-Ma{IyOvCb[HJStE,*xmxuH 1!2r{4yy');
define('NONCE_KEY',        'gR 5@^_OacAT+P*Z)SQlS+|CBcDwrxtC$5};S2`LOXic!xD6Xdc,AYKSTHy3[=zR');
define('AUTH_SALT',        ':-2#nOiakj-s0|tntNAY4N|t>(85kpRao07/|E8bL^ Sz#uQ,/.Q_5qq8!$XJIjH');
define('SECURE_AUTH_SALT', '%xs64LYdg=8l^+O=0.xp94Ao6;?aV6*/v-dxh*~EdXg,-o)/8<@sM8.Z!!pD$ )A');
define('LOGGED_IN_SALT',   '-6|,cY^XeU5!McL|7sZ E?b_m&H(Y)tJ_>/R?6P8{$-ps5*S4K8tv)_,WzyoSv^2');
define('NONCE_SALT',       'Yk|U(/lj27oB;5!J;CthM PFEuE Fui+3Z,LmJ2..5-v|J<$%ctjwVdRoKj|`7B$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'indosiar21_';

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
