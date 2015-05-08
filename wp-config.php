<?php
/**
 * Hola
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
define('DB_NAME', 'cwrdiversity');

/** MySQL database username */
define('DB_USER', 'cwruserdb');

/** MySQL database password */
define('DB_PASSWORD', 'X9u#U46F@3jm!8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Upload limit in wordpress */
define('WP_UPLOAD_LIMIT', '128M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o ^=:w99+UBgAs/%ycR^!.`APC}-|4]3^Yi!Cns!; 8|L{P=GIcJ[ZNO%h@!M@WD');
define('SECURE_AUTH_KEY',  'K6K9/`V1A:t-KPT)r,#O]C|ZRd=T[kJ| }y|kHwb-]M*{K`>fV CBYpPP(O]*Nz!');
define('LOGGED_IN_KEY',    'uH5EpHo(B1fj[Ab|t|xEnq%j8$}G3bJPL:V6PZTrxH0IGXj@KSUTn^*xqaSJV7/c');
define('NONCE_KEY',        'I](!H+g=|!H?Q+1Cba_0kNew&oxXAY<_+8?@DLL.5RU_+hnyfQ1n(5t?}J?J,9U5');
define('AUTH_SALT',        '|iNgL|m=hnDh6A@w FA9VD;M7FSE-qvwy{aGzL1i8lOYVa/u1-v]VJ~g`QCC[PNT');
define('SECURE_AUTH_SALT', 'zbIiY.m#+6R!T@D^DY&ZSg mQ,/T8^hNClO~zC,tW+(xU^ug#qBsXG]&0l`/s3Oq');
define('LOGGED_IN_SALT',   'U*B>Yyz?LX]krB|qvzII[|@W)Yd!o@}SAH>W$&FfTk/~vg7zN=QLwa7p|)]23>M}');
define('NONCE_SALT',       'KyK3l.8|mf#24Cwh!RrRej#<Z${<w=Uu=/x`0l|u-}Oj2P+B@ux=O}9EpwQ5$|b!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpcwr_';

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
