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
define('DB_NAME', 'nzs_poznan');

/** MySQL database username */
define('DB_USER', 'karolznojkiewicz');

/** MySQL database password */
define('DB_PASSWORD', 'K2a9R0o5L1994');

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
define('AUTH_KEY',         'Vw-LkNT^3P&JvWV1|$|5u[lsCTx-$GL))Ehmp`A..!Bht;oni4<2hH%]eS_Vx0ab');
define('SECURE_AUTH_KEY',  'Uj_>tN@]l=}W/g#q;y G;a:.#M/@E4coHm:SDf7Z^5/wHrI=smnM:^{V6J%t0$j;');
define('LOGGED_IN_KEY',    '?v.(NMy&%6?Ap=g5ClOG:K3FzHc/R3Nhcv#8I&uDkf@qr2NH^jJ@x?y!P*4F@dYK');
define('NONCE_KEY',        '<nQo5Ss1Ilou,>CtL/}e-iU~ Fw}C#xnu:,Sw+{lMJpoq1e;8WDfG/5)]z8aZ.wm');
define('AUTH_SALT',        'D}}X /Sv//Q!*=zJlJyBC9>MW)^~$Y4u&fCM,~&e`S.TT#jqoe05$OV} #mx-]yh');
define('SECURE_AUTH_SALT', 'bum+I/At9#s4w7uWey(UsEYCpH!`*5O},/V40PJkSEs$%L7`eR3aQ C4iCk++Z~T');
define('LOGGED_IN_SALT',   'Z]Yh89q~8;]/_igP9B&Nv).JG(9DwXeo|I<JhHa${/`Ux5+du~zjESg6hZmsfKTH');
define('NONCE_SALT',       'sD:mz[$#1<)q%:p4>sU<]L;]e9SWO4f2|e{_n@OkH&Akk1_*OLr*~X!|b`MgmcPk');

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
define('SAVEQUERIES', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
