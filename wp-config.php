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
define('DB_NAME', 'mchernDBt3qcn');

/** MySQL database username */
define('DB_USER', 'mchernDBt3qcn');

/** MySQL database password */
define('DB_PASSWORD', 'ZZ1I4CzkWf');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'e_DSix#6Laq*;ATix<{APey<2IXm${ATjXn$^IXnr{BQbv^3IYn$}7Mcr^3JYk@^');
define('SECURE_AUTH_KEY',  'k4Ghw|4KZOds_15Kdp_#9DWatx]:HKeh-DWai+~25PSatx];6PTmtx];HLeiq.<AE');
define('LOGGED_IN_KEY',    'Jos!fnr,>BFMfj$^>BFYcv$^37FYcv@^47FYcvz}08RVovz}08RVovz}0JRVos|:0');
define('NONCE_KEY',        'p9Oap~;Pet_2HLeu.6Lbe*ETfu.3IXIXn$3MQjn3MQjrv>}FMQjrv>}FJQjn^,}F');
define('AUTH_SALT',        's8KZo~:Cp#59SWpt#]DGa_1KOhl~_59SWpt#]DHaex+;2LPWqt#]DHaex+;2LPim*');
define('SECURE_AUTH_SALT', 'rjMQjn^,7BJcgz@,7BUYgzcvz!48RZcwz!48RVdw-:0KRVos|:1KOVos|[CKOhls|');
define('LOGGED_IN_SALT',   'Bnz3FUv^0Rgr}BRc@}8Nc@}8No@[8Zo4JZ-[4Kk-|GVhw1CSs~:Odp~9Odp~:Oep~');
define('NONCE_SALT',       'm6LPim+;2LPim*<{ATXqu<{EIbfy$y{IMfj$^37QUnr,>BFMfvz}0JMgjz}0JNg');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
