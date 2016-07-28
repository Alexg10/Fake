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
define('DB_NAME', 'fake_bdd');

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
define('AUTH_KEY',         'Hv6Wj=uo`u4y^4,cAjvo$q`IFp*;DrLK6^mou|7>0:ntO8dU4`xvm-I$-KOpmcKS');
define('SECURE_AUTH_KEY',  'z!<4Z1ul!a_&g/utBZ0#CBNC(a$6M;)F%wU#KRXE[8J%hC}ZIs4cUWi#KK`(pY/$');
define('LOGGED_IN_KEY',    'y7|b(v]6jK2>J1yJjH:f&q0XJ[V+xBfIt^2G[RCh>0^trImRmFENbsx;8;@lJSxj');
define('NONCE_KEY',        '/|qy&2YVcZ8gewkIY -2 ~EIe@J?TI4@}zn5b0j,T3GWtJd[@QP_&ben/p>IY/k!');
define('AUTH_SALT',        'okvG`SPMWs#8==jVvJQ$V|RUY$$Ekkp}!qxSQ6 8KJwpq&z&F0jBlJeI%9$r_`Gf');
define('SECURE_AUTH_SALT', 'u$vVLo`bB/a9cohOG{AdeBqh`i~VG9cu)%cqQYS%{]D^N,-4.+manCy,0:{_[h:}');
define('LOGGED_IN_SALT',   'c[b^1zL.QSTBNWA8 &vMtVf1W*Mc-dmHP#l/p}u~?P3HBt3b/6],kbA9{s^kb~z<');
define('NONCE_SALT',       '2 G),.|pgV3~&U`!1y+ [  4_H5){b^M}PFk%me?y 5`.8qnSbD(eK:d|K4mz&q3');

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
