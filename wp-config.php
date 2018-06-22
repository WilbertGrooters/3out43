<?php 
die("Working");   
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
define('DB_NAME', 'wilbertg_3out43');

/** MySQL database username */
define('DB_USER', 'wilbertg_3out43');

/** MySQL database password */
define('DB_PASSWORD', 'V!zNtMHC3!-h');

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
define('AUTH_KEY',         '&j]2e+X9b,<VM2yQ4>+R :]P?9OdOh7#zk[8-ISQeLw0|ZOWg]>L=lq85d0m.~Jg');
define('SECURE_AUTH_KEY',  '<`-SP!w-|]h5C*eAmcq,;i{DDS{5TEw[?)&0AAY{t6:^8.Jn@sjk!Yr4VJQMzZDm');
define('LOGGED_IN_KEY',    'v,%I(:+23@`Y//#i}-VHL3LA4LJH+hHnhksH.OjiEFs+E!t#jF]5[buFjZRCQ]SH');
define('NONCE_KEY',        'U,r=zGP~3$_GpcKqHj@0`1{:u$En+?^~H*Ndh2|}Owr6G)0wd9X3hd@I>_dQs%~f');
define('AUTH_SALT',        '~GPH0n9$dD@?J]DJ~:Xm;7/,;_9!cpI#h&f:Ni!?f:`gad);wy YIgvja}Nmk?0>');
define('SECURE_AUTH_SALT', ']*0|)H/JKE6(#a|fJWv#_Bm?1S?3so^jBp%oL[YjPivl9x:PyPo#:`(U-T25Rqe6');
define('LOGGED_IN_SALT',   '_VvNwHV4:[f$.hP>/kaaD-<8=UHhlQ!:Z*zb;~.= +37CdU}aH?{O6#xsZ#yDO$+');
define('NONCE_SALT',       'ygzn*~F<siyhE/tx>C;21e;o_<fY:qwRH[>u?Z`3`S~*dY&nc4aDAC]]A$-Dq!8%');

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
