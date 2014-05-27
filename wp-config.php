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
define('DB_NAME', 'amparsons1');

/** MySQL database username */
define('DB_USER', 'amparsons1');

/** MySQL database password */
define('DB_PASSWORD', 'hej82Xsha1pt');

/** MySQL hostname */
define('DB_HOST', '88.208.193.103');

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
define('AUTH_KEY',         'd$r1Xa@,1+vCAHUo[+SOsh-j*_; 9Sp^.j3ID,UT(z+)(H6BndR&R0wSFb+^!Kl<');
define('SECURE_AUTH_KEY',  'hjR5<UCaS}oGg6$=-)K&yA.`;W>>5cY8vt.:M`j|W !t~8J3G>Q4~:w4hU5lnbP6');
define('LOGGED_IN_KEY',    'y+jrSdwi^vWe!j+Qy_U5xjfXl+>+eg$G?&fU[|rZ.k?;[&#h;7Ly&RQr^P]#gPD8');
define('NONCE_KEY',        '<Dh<Oi6J|am,ib_X,6|+$c=s(:+u|+:euu*7DiqYGXogzZy+&Dks=.0X<pZ-xP_ ');
define('AUTH_SALT',        'g&|9-<F9Dc)Tj ,YaPxKV_i[Gcj2(+@Sf=f4XXM6/#mngxfb=m?.(Duy-4k^*PO&');
define('SECURE_AUTH_SALT', '3{c1[H#-N5Z,Ee*sL(Hw~S[V{SJ2`aZ]j6VLRKlF5.R*}-N$-eao0h+c?2b$lfix');
define('LOGGED_IN_SALT',   '4+YHsn{?W= ugG2kV(m tT/YrS3(M#aUd-}Q!xAR%oNH|=rxEAm^=+_G<u:P0KP.');
define('NONCE_SALT',       'j>nYW:W o?-AQo-y0`~_GJd9sNU>Nm28&kw7+/XZgP;K}h/yll_>~7q@[bi]?}(C');

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
