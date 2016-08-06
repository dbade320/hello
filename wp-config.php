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
define('AUTH_KEY',         'u/i}MXL2H27$k1VUR-j{zjQapbe$AK%eW#{v @/2W%]{c<.$G@w,y$&swvRz/&ZC');
define('SECURE_AUTH_KEY',  'H&WV?S~:pjlg)2>KM)4FR_RX@Y:K{Mt-0#<(w=Q*p}M$l]Pz2qowP@E(Ypm$-JHs');
define('LOGGED_IN_KEY',    'd.ZHM^Q?X[Kka~^SPeE$&|.wq/ }VrQTP-c`T_:V2g9a$NmoCq@G7p*zJKEvd17j');
define('NONCE_KEY',        'b#zKU!66>}YQh>,4E4 ^tE&U&3KvEV)=LgL@iYNR+<s:C:*C15JcLA134Q~$[Vmi');
define('AUTH_SALT',        'YPO|jJLU8~4eH! +,y+L r3GRSz~2,g{qa2-dHlf(XdWob^{J)[f$RVOQr[(Ba=u');
define('SECURE_AUTH_SALT', '</s9uw dEVHKm2`U@|CcUTkCp0V~CKc}pa2>CAHE|4k3Uqc7+%D%$K(ZMR+/T(5`');
define('LOGGED_IN_SALT',   'k.-MV ywQqa61cPr4J^A+8glP+Z7Vp.w/m7l_53f8jQpOT:5W33/_=8_EFqIJIbh');
define('NONCE_SALT',       'UFlboHs.L]]m$!RhIf3[ey&ab<`<{^QN]F#p!Ek{JG[#bCV_:QBG)9/|ggF(Fhz%');

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

