<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

   
   define( 'WP_SITEURL', 'http://wordpress-1634645544.ap-south-1.elb.amazonaws.com');
   define( 'WP_HOME', 'http://wordpress-1634645544.ap-south-1.elb.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress-1.cluster-ct3aqqij2ijm.ap-south-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'J69-u)pVZFLV0=R|[pp.?]9Dtb*|dBR(Y#aC`>+X5r@j[=y|AM#C6_KY)m _KAzR');
define('SECURE_AUTH_KEY',  '~DLM}Dar=#A`P.$-_=h0PA[pYdR+o.=NhAl5+oL&77fRk3-kKxlnZARb7}~Q8MK#');
define('LOGGED_IN_KEY',    'B/.w~B9|w{/Q_0_<J6d;V09pc pk]y4+-PUJF_4j57Y1$e%JO3pP-?*k{?XG66X5');
define('NONCE_KEY',        'H%X|-+FZ`Li=u,K+6_Vs42h1B,-}}<!O{b#w<{tS+q ikN-CwO3|qE^9HF,;kc^v');
define('AUTH_SALT',        'tLJ!&&t]}%zllQ:KAy2Jpdks1lIqFF! E_Q|~XyBiv,U3qvr(~b2]9*z0-;t{.&v');
define('SECURE_AUTH_SALT', 'p5<O5sN#%n+~d.hl{T}BO`_}xrV`fST1fAb=3@ od4#!CC<j5<ujnga|q=P9LooC');
define('LOGGED_IN_SALT',   ';7>H_F|HQOJHmMg 1N+Z?8PcL7c[oo6B=fnj!-bl;*ve(ahfOB1mmXQ_L5AZxp/b');
define('NONCE_SALT',       '7@;FEaU>Q]An:v$pE4o+G%.YFk0?L}+FQ~R=S&mam*mW!~vX~:*2RGY0>tH2K,5+');

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

