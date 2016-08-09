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
define('WP_REDIS_HOST', 'wordpress.dbuclp.0001.aps1.cache.amazonaws.com');

//define('WP_HOME','http://d3fmakqc24ht3e.cloudfront.net');
/** For site on this */
define('WP_SITEURL','http://d3fmakqc24ht3e.cloudfront.net'); 
 
  define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         'Xf:EKkJOVvrZ3?sThbPgaaeDM+N7{83WYr9emQ<on]8-#8u9*:BK{sGv^E3/>f@-');
define('SECURE_AUTH_KEY',  ':,giJ3^gluRFqyuu*{a 6TAyrOoo^L7Eb$BYGLY&}rH@z@{GK(kAL4uw*PT[hS k');
define('LOGGED_IN_KEY',    'lt5UPO5Xy-K) LT!!lNtSHYO5KVP}0MGd$YAm)Szd(K+poSo+<UQd<Jp#bn0}%Ub');
define('NONCE_KEY',        '0~U0UNy?NAsY;e=(uA{n)*ieAw0.l`T#-*+~xDL6r.SK%R!CHQExT8Vp#t5!ITZf');
define('AUTH_SALT',        '@RUMyKer7{bFhdvOk5t,*3:Q}*7bW/&}Tse(<6r.r^PG-NVdL$&Nnkm8Zx%aLJrT');
define('SECURE_AUTH_SALT', '~+X0s5915VRdP%k{`#hKn_VJp{2MvBa+:.`8#>hxg&0x%&lI1{udv0>FXoj? {!s');
define('LOGGED_IN_SALT',   'FEO<`XC*P^(Gflb7m-3d^1;bX#0fu5#DS_eG!oo&0b6c_XzRu2>gFn9n$] 0VHu7');
define('NONCE_SALT',       'Ht#UmVEN:>Yy0~;@8:M*rz[GNY1KoFZkB|GE  ?nrx0^TIZFJT~=$MP((8)~jB=]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'FM_';

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

