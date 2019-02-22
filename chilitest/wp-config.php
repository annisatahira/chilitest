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
define('DB_NAME', 'chilitest');

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
define('AUTH_KEY',         '(te4h`~9ut]azaz!2%/MO-d0^tvPJk{|U7v8 gUcM)Ov<h3HeTB#salftHY>^ygg');
define('SECURE_AUTH_KEY',  'EP^R]B2%u+,)04D5rnv~B+Vc)G]:ZCGMQ9[EnG*;rM+`aJj5&J]?mk)fC#0CyO[3');
define('LOGGED_IN_KEY',    'NwNgp`RjdlxF| [gs!mhc1f}x>08;9x)OV3Dni}[d:;37K%.#8D55RTRq50%2?4_');
define('NONCE_KEY',        'wgy-1Af6vZVxjqgOvce;cbdm`|7CfN|xv5I#~H#A2MXHNm?d_a>aOoiE*Xoy.* $');
define('AUTH_SALT',        'sBO8MTd5Qk8n;r=%Ksihs/HMsFc$V<?WXB&xE`)7R}^MI/Snd3i24Z^hH2g?mbyx');
define('SECURE_AUTH_SALT', '%PY`R*f+&f jr1K}F&p:d6ejfy@n+{H):s(l ]r@O,/[QC]QE!@{VO2[6 I?lcs7');
define('LOGGED_IN_SALT',   ':mSFgdBdtdV8T{hDj(YX,TnyA&R(Oj|ORu@7(M=<S)(z52OfdhMvZJjy%qAQQ0te');
define('NONCE_SALT',       'o3Vu(sb<mVf;{WjFIB+6ID:*a0bF@q.}l4lG4c?jGMD)VjE0nhl@H{Emze5lSZUB');

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
@ini_set( ‘upload_max_size’ , ‘512M’ );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
