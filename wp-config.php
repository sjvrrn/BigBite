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
define('DB_NAME', 'bitbite');

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
define('AUTH_KEY',         '-*u9HhC&B^ G[jGs7K|3PhTjs8(p*[1Sjlwll._w[|<t_4w;]Nc]Y!N_;0bEcBkp');
define('SECURE_AUTH_KEY',  'tAD=ER]0*sI#(jx2LekRi_|@?vaIS>1X)F?a[4#4zAK;w7k&I.y13.jw<IoND~pf');
define('LOGGED_IN_KEY',    'bd_||*Lq)^[%99?!_aQB4.|9!319UIGmJfo6am17#H0wg~B6dknw>b=NDq6/gJ8@');
define('NONCE_KEY',        'ue7mR+Bk+R92ag]+S(Jb_5Bd>/2fCG&2]W]s7Xky3:2FP*MugjA-}Kux_Ujq/Ekj');
define('AUTH_SALT',        '[;0zJ 8?6e=rug|g=qtM1|F3X$&d<QO5~,8B^u_1 JnP4XNegZu113 z@oxQL4uT');
define('SECURE_AUTH_SALT', '{/dz4OOBa?/4DEt4 aOj<x46.Q$}<gk2!_sZN]5(*.T7mB}h7m27>#F-egbLELS6');
define('LOGGED_IN_SALT',   'X4#6z%D{=hs|y@J8[NSfI_#Z>W2D~b#JZr_@fGrvwb&FI:Sc;&,YCnCy6ILRgrBN');
define('NONCE_SALT',       '2M/HOT84t.CC,Od;}@ham)4:yN_}xsP,4]%8%tJhk&Vow~_Nw#[Tpp4@PDLWWGNE');

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
