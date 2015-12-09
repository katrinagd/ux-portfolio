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
define('DB_NAME', 'ux_portfolio');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'UGyWueCq8ma6DFvV');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'P;_cX)m6~.|!G%rhHp5^)s[+BXxqpQ=(Xe/m5{47LzT.U/#PPD{a|OonRsbLCXsv');
define('SECURE_AUTH_KEY',  'hyR<4-s>|Y|}RTXxE8)$/ <X<m}H/T=MiQi5(--<|OC:wVSOe51[|H-l(]S8cDS1');
define('LOGGED_IN_KEY',    'Q`.vc^7]j.+5#LL-ihoZ/F|cf5!eVTy%+GPP`X_n7W2nk>?;T!& J05N~R7<>yY-');
define('NONCE_KEY',        '%wDR2eWsL?,ZB*.E}a!~xE0|&UqJFa~<8cA]1bW^bq|Mn[Ga{Us]Fol+FBeRhrb!');
define('AUTH_SALT',        'c#}?.N4$>mGyR_/E10|*7fi[Z6_b((+PaSgZ,v,5+rU+Az*cF7_LHlg|s?zI>K+f');
define('SECURE_AUTH_SALT', 'Aj~WBaF>A.(2m~b1!VdVQUCJj??c.)ROpsrvPq2Sy! zOHc- uIV9Ro[,vO~qX:z');
define('LOGGED_IN_SALT',   'IV&E~XXS|Jxqtbk#|i(KN@icLVq<=u8r!9`&u|`ZdI4uXBg@BTslfZQ@{B`5*-yN');
define('NONCE_SALT',       'm+M$IsHjsDHWT,[[O8m812(_GC.C`fPQ1&E0yo_[_3fCOn=&z-gl1FTE*0@xx7jH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ux_wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
