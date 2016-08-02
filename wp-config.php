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
  define('WP_HOME','http://wordpress-LB-1540390121.ap-south-1.elb.amazonaws.com ');
  define('WP_SITEURL','http://wordpress-LB-1540390121.ap-south-1.elb.amazonaws.com ');


   define('WP_REDIS_HOST', 'wordpress.dbuclp.0001.aps1.cache.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7EuDj[H+$Y+;f&Pc04t*fHs29 l9M0BV1 I+IZUn,ajbG|pr8g>Blk9b<{=^,)GT');
define('SECURE_AUTH_KEY',  '}*}_H>P/.OEO:VNaM<3e+*|D@m%gX|ysN4)7kXG}@?fiyKswO,lSi9(j=@VO_)Wy');
define('LOGGED_IN_KEY',    'jf(#(BFEkygFdU{|5rmJ8jhCR=A/~WhWX_uFIK-c|d1RJB]boc~@B[ee(8|qd^va');
define('NONCE_KEY',        'K[=$entL1Y}b~D{^&Y6SWWRQ+{KgQ`Rw(@}<0PF/H.d=r$`SX~E6yk6eX`-B$ot=');
define('AUTH_SALT',        '-Vly3qUBLi-S^>ee4+R0nJ-F2/L}2-e5NvARwnCIJjE#gjJ}YwRu.qroBl?_(FF9');
define('SECURE_AUTH_SALT', 'hu8@vjIRpw4nPmvZXo+H>#%eo0-?-*8DCNov>YNEB>>v,[*tw3KqU?fvINIwfp]s');
define('LOGGED_IN_SALT',   'JG~OZ+_[s#w!NjoeBt9vwA+zn^J+ZV@^bkA5+e4?$9U$EoQ]>{GLgTF>HSF&}:J4');
define('NONCE_SALT',       '8.ZO|D(K]>%Dhey`?cP)}ryCQ`{aVhq3F>&.?8<KL}/D4nLUSDC-C-caQ66-x.iJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
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

