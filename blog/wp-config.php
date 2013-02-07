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
// 

if($_SERVER['HTTP_HOST'] === 'patchworkdev.com') {
    /** The name of the database for WordPress */
    define('DB_NAME', 'patchworkwp');

    /** MySQL database username */
    define('DB_USER', 'patchworkwp');

    /** MySQL database password */
    define('DB_PASSWORD', 'Budweiser4!');

    /** MySQL hostname */
    define('DB_HOST', 'patchworkwp.db.9953972.hostedresource.com');

} else {
    /** The name of the database for WordPress */
    define('DB_NAME', 'patchworkdev');

    /** MySQL database username */
    define('DB_USER', 'root');

    /** MySQL database password */
    define('DB_PASSWORD', '');

    /** MySQL hostname */
    define('DB_HOST', 'localhost');
}


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
define('AUTH_KEY',         'uMX)F7*^%FXWS?/(Pj5] u-B)*9=-3Jyae0`U4%AybhIa~+Sx<Cw$3E5o-( aB{=');
define('SECURE_AUTH_KEY',  'ne`R~4E6,>|Z@C{?A~Ylfi_MDE2QQ@,xObrsb{8>2,--CT*#uXWP:nJQIM2L43Y#');
define('LOGGED_IN_KEY',    '+MHPHDL8t;|HyYgz#3pBBAF)70^Tr*E`@|a]xyO7rLhhuEfuL+Bc@gS[EF9c7-sp');
define('NONCE_KEY',        'Xrsay.kBhw6$ Qb#Q%7!HF2K~f75ZTmGBH9R=bBeE#jCFeeeNi*o,xjoBd&F6JZQ');
define('AUTH_SALT',        '*46%Kt[;`0+]i_d,LQO{ ,+QFboO`E5}JJrdsDlD&HP@Exz)@7Yc5!QJP(o>SV4$');
define('SECURE_AUTH_SALT', 'n]e5Kl:C]<u;~oNRh``-NFn})JkrP.yLO9UL6]QH.YhZwbTt.nb<3k^WHw>V8Ycj');
define('LOGGED_IN_SALT',   ':c.UwYvXX.?7Y$I}47I2tQCg7!UzI5`(7M@|/PLsh(#2rv2:);n)Op0FkXQQDxTE');
define('NONCE_SALT',       'k}D^jyPXO^Ara_@4nY!__~QGZ7yly9Jov~9$:!z@3YY;=YessuRetb+1MH=sV>>2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
