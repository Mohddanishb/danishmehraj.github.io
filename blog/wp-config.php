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
define('DB_NAME', 'Danish.mehraj26');

/** MySQL database username */
define('DB_USER', 'danish.mehraj26');

/** MySQL database password */
define('DB_PASSWORD', '9205@Tata');

/** MySQL hostname */
define('DB_HOST', 'sew26q4xdx.database.windows.net');

/** Database Type. Defaults to mysql */
define('DB_TYPE', 'pdo_sqlsrv');

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
define('AUTH_KEY',         'pbO1iU Rmn0!w#!M@J5RIrBLgBwO|KG!]s8cl/[>VWrk;2C_h88fF-OuEfxkSrK?');
define('SECURE_AUTH_KEY',  'f0A*pN5)U@-|%&l<O[F)|+ifWV9tP51@I,ly&0,Ub,z4k(3}hTqhF##A,CnNHZyi');
define('LOGGED_IN_KEY',    '!pEw?f2Jk&!non$-z5jH.2ABgf+fCw@|+=s/&PBTfxl-AI%e>$pdw$v#wXPJu+l)');
define('NONCE_KEY',        'Z!E}*XK2UqKl`(>rP-C*pnGC||3ELl;~QunX3r5^5PDWzKsVV)T#`6 yH=bv>lGC');
define('AUTH_SALT',        'p2)KiwJvsoaf|8aKS$#uB#$Y1Z)-4c6:t*|d.1Ss>lb0ef1&EZ+9k^N=; .hQSa(');
define('SECURE_AUTH_SALT', '@X*XifiT+n|U(dVV+HyyVM^=R*.M]3Q--|3c5dD.uD!xYw*UKOyo$QF|sG+d).VS');
define('LOGGED_IN_SALT',   'CY rz!k-8,KbM@_)|q[ORJU?G)}WZ5Y34J:#U&/ACoi_IX-[VcpmFbkGw0xT<29B');
define('NONCE_SALT',       'iBzx(*|!9|zCA@Q;Q$YPTaBstF[:{Q5>Gi-L@u`{e8Y/t!}Wb[z+a4)Q/tOL|pp*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';


/** Query Logging Settings */
define('SAVEQUERIES', FALSE);
define('QUERY_LOG', 'D:\home\site\wwwroot\blog/wp-content\queries.log');

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
