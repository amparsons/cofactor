<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cofactor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'zqB7dL!KeV#8 }Q_yg/}*c^r~Cn}F7&&uGv6d)xB?qMB{pD<x2siOoGC0Rqus&Wl');
define('SECURE_AUTH_KEY',  '_lxwXw+UmL:R$+_d+jcP|w4*>+kV014*,IJQg[ 8+7&<;H|tIobw4-|bFH>x@Pcf');
define('LOGGED_IN_KEY',    'cC,k4>am.8Sc*r0Hx-<VTN%&5@j+Ja=}9 OaJld0?uJC++4#F=-VW[+r<CmDTKxn');
define('NONCE_KEY',        'VedO6$SJ=)@/_O0s}[]DF,2n+jf>``UN|J>:!Nu<JQGmT/l9sBv;Z+A)j6$SxpJf');
define('AUTH_SALT',        '+,>xG!>hFZ=b0{g@yQOZc[n4UpvDP;~{NR#2L+tJ=`(N@#q&jC*Lmop78tE-_],[');
define('SECURE_AUTH_SALT', '#j~l^w}?d|l+vIH+lG5)70iY+l!/3X|V/Xt^P#+Cu--4)dK$L5`X1e+JFfgg{Inz');
define('LOGGED_IN_SALT',   ')Py]o<CY<fL*BHJerJ_X9lNR(6NUk?vcz4llL}g=LP&ya!eemO}Gf(=Fy.H<H9yZ');
define('NONCE_SALT',       '$d}q5+zIHp%ST]2QVLDX/?W((E-hJSq$,0S$Nm%^UYMbyK?OihMTau83vAKqS(F9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'co_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
