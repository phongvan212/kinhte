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
define('DB_NAME', 'dbkinhte');

/** MySQL database username */
define('DB_USER', 'userkinhte');

/** MySQL database password */
define('DB_PASSWORD', 'WY4xdL');

/** MySQL hostname */
define('DB_HOST', '192.168.1.22');

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
define('AUTH_KEY',         'r0&&2ZS:N)MBtj=L}$5nH]R~CtJpxpu/`k-W9cTw6)?|ENBDV*cx<+oQ!+y>^?@b');
define('SECURE_AUTH_KEY',  'r o%8Rn>!*G8+xVCyr)SaO7IZZ9Z.=kRb-kTYOU;}ZwqyxAEx::z>G-i;y1Rt726');
define('LOGGED_IN_KEY',    '-uI4CdNjE}ai]%c=N+Ez uni6aCV<i00x|t&#u16}#`Xce$EcYo6s35=OsalR1_Z');
define('NONCE_KEY',        '}8<2?q:6V&u//5Wa?sN/hPNA*f|v>-ST D|7r+9~%:DnO#.RE#`W0}M&H0$$9mNJ');
define('AUTH_SALT',        '*b|C6H7/%`mz,~$)-Cc3Xh}l<}QN}s{#hYCCn@[c|}PGXsfD-e9wy|I[O*!4_$bV');
define('SECURE_AUTH_SALT', 'lC-oraaMQRP{9W|y&4a5_#j$>@X6zo4=NME6Om/d?~G)[rS%I4|=!3J+x{p425u#');
define('LOGGED_IN_SALT',   ')3ji_?7q0#;(kpk1Y>T5<Xu~PhtqB5 E8Xk@00IP12iX[^#Z-vaM@#-|(S|4d+,0');
define('NONCE_SALT',       'P%w-5Oom=_+z|PS.O|x0U}DhK&=s)Z:.#{i/2*)qA|JG#(4T6pT-CzIxKC$&Q0+7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tdmuef_';

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
