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
define('DB_NAME', 'cartegrise');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         'DyZAYqsSkqwRWtzs`N)@<f0}*x_UNJwzF D^7f#u,<+b(cgF[Vt#t:lhk/5R@vP_');
define('SECURE_AUTH_KEY',  'Dn$mB-*_ta[tTJrtj(Y8jn(Bd^c@y4f7zvb}gfX`Wr3cTVDJk^0wC-[pR]H%jsO(');
define('LOGGED_IN_KEY',    '>[*C(G*-*%qLB1Z+{vwbvr}3J:AlmMdD-o[8~:BIgt3v1c`eezS_+QyAnG3[LnsZ');
define('NONCE_KEY',        '02,4nXhdUi(Gdia&2!mxU!xP{WLGyZMQH?hj)[OfAwL ]<;-btDOF4M3b3!$kpS6');
define('AUTH_SALT',        ':xZrGLDL,zgrA`+g4g&/-a3gMwBI@~<Q`-<~|m`U5SQY%05tgjL_?-)o*L5[9Jm_');
define('SECURE_AUTH_SALT', 've2[LGmRp0Men.1V8#:AP;JjdL^>GGGQ+Hk{hhIVx+lC./xY6CbzV>H9iOs)>pi9');
define('LOGGED_IN_SALT',   '$AwIS#}>P^,%4cz{%Ur(O@VenvVheZd#V|*jwrWwN.qieT]+|xuI?7|ux,WGtbuB');
define('NONCE_SALT',       '|a)*=@xgB&/2G)CZ~{uH~3n,N;U{xW$j2lVP}>Q~,J6 y-M4wbX(dDA1/bRH>]8)');

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
