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
define('DB_NAME', 'nirvana');

/** MySQL database username */
define('DB_USER', 'andpost2000');

/** MySQL database password */
define('DB_PASSWORD', 'andrius2000');

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
define('AUTH_KEY',         '[}Bv(#W?JK$eS.J|RZIv1mkS1GFT!~fls$.lwBFE@^2?OT_hlgr),D*c.q*v`Ssd');
define('SECURE_AUTH_KEY',  'b&keh5ww)oXkKUrvxzDu*x5`A)>WIw/y,9rNOZkOO-{tq`EE^]IVVci^8*6q71I?');
define('LOGGED_IN_KEY',    'W5rEvLHSvUg,~KJ|l09aUk|@.n3awL9C0Iw*DdF>*N8Q> UC;>_=.0,G.K,l-.wG');
define('NONCE_KEY',        'yVxSJNyJ}4~7sMY3r(n86cT+LTt2qbqK^Db~{E3d7z_=mVB}k${$r0?RNF=$IN(q');
define('AUTH_SALT',        'aDLeZlv.m7SM!8y*9gOb8$5eog7LJVlqTq:g?1/=%Gv 77CeG!}GN$9^KRtCioRu');
define('SECURE_AUTH_SALT', 'xTCPVn2%o_TV:vwRY5~^Tqm=:~} MeL;cmSVJc1< =H]J8irnp*47]2).n&oe/q&');
define('LOGGED_IN_SALT',   'lt$3C7wH+wl/Nf^GlUlpv|QlKWV/W;|CX<,KnXw![%S6m?wKHNoEIis-Y~;iGH~E');
define('NONCE_SALT',       '($*twD37s{B|<Ay@~=ov (T?EJb%yB2<z_5J_5Q2Xyp%L5N>]vn/4|5svMM6+|Dh');

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
