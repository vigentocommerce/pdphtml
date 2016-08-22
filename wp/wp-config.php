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
define('DB_NAME', 'chung_pdphtml');

/** MySQL database username */
define('DB_USER', 'chung');

/** MySQL database password */
define('DB_PASSWORD', 'chung123!@#');

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
define('AUTH_KEY',         'TeS,e:{DP]a8xradD#65 19.~)sq3O_K.d&g,!mL-,cxXEa#K@eV!ue.5{8fE8fB');
define('SECURE_AUTH_KEY',  'C%7g5;(*4<rfL-ZdAHNLv{Fs2fp_0dX G[1#KgE/MxJp<A3L4zP3$p:]c$-]7!$T');
define('LOGGED_IN_KEY',    'b.&FAyF)+T59KQ;y=AQhDsIZPhlDPUVH5vnH!RB[#f7f:s7iHo:)}6r84Lc2;]92');
define('NONCE_KEY',        'c2h{k:XIqZz^e;+t)YM[;q,0|~X+>_wL<Fan9)PW*VmmWd>[q4isaSoM})N{u5(e');
define('AUTH_SALT',        '$g7Bc|/6c:}Mt(8#]7QmK)&rF(j.F ^wZhZ1{ya~8eH?*Rn&e,_~b&)IAKhL5_Mc');
define('SECURE_AUTH_SALT', '.Hexa;;:CH-zF<t`o;S[&MfB<l3>-ANd{~!knhuxB7CtRzv`&ut1XX**rr.3/5uT');
define('LOGGED_IN_SALT',   '1Qk!` {)m}g8vij%(csqRpIII<0_$kNTp!1ev:iY@rZg.vtyOb5/oq]lssn,rnT3');
define('NONCE_SALT',       'VMJbdRhm9GYO&zd=hV<ZdE07J7nNE>:F)>(a~*x2_5wMCfTtRqrj^GX|(<1dMFvr');

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
