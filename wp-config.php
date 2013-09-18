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
define('DB_NAME', 'vf');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
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
define('AUTH_KEY',         'f$^#^(65(;BAoyH3 bO-DF|hk:]SfH5s}~~VhtK:k/XJGSlu?&S5Eh]5FA|v@-nj');
define('SECURE_AUTH_KEY',  'ANUR,H:NMTn{*[c6._DY!N7zq0R|y?|%Bh)Pt 8n#x=uCmJN# F??}}UI;c>~~14');
define('LOGGED_IN_KEY',    'jV[;oValZrgL+(Fkf346OhP,rVzOe_37k)|ixarWd&is9bk*9pwPQW3?yI)],{7)');
define('NONCE_KEY',        'Bw;,)^r;^8}>;`&k{h74+yWPQk%ZlygCk&To_>RXQP?KgHc]BV6&g nBj02Ni>Y&');
define('AUTH_SALT',        ' [e+&J&Nz]?UDBtH{h;:C3[R:Y1EFq.lIEIy^r18gX0u$6EO>X=z (vmZNn~uhuR');
define('SECURE_AUTH_SALT', ';_xr|$<]bokVWA}=lW7{w%~+:l|SNBqL)={t]JG`D:M73IN),4S1@kJ@(y[2T9am');
define('LOGGED_IN_SALT',   'yV&{$9d[PDX.,[B;!2>YeUz?$vObIN{vF*h0N,M57{OI)|G@ABI9LM=9Vn}!C{Y[');
define('NONCE_SALT',       'xMAz,Gm}Vh~T,o-,e%_qXQ$;gtRAJr:]@b|aCO. Av*/`G<v KXK0,fY34%pgXuy');
/**#@-*/
/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'vf_';
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
