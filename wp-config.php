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
define('DB_NAME', 'electronicmusicianscolle');

/** MySQL database username */
define('DB_USER', 'electronicmusici');

/** MySQL database password */
define('DB_PASSWORD', 'Yvm73r?W');

/** MySQL hostname */
define('DB_HOST', 'mysql.electronicmusicianscollective.com');

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
define('AUTH_KEY',         'gsnz$dQ#yQve#Wk(R+olY2)Xb*|A`%6^p%I^%Dy_p4P4l07(hGreKRlu^KZW2FDT');
define('SECURE_AUTH_KEY',  '+pru)nBn^yk3q|ZjyGd(ZP73$39EToOvV6GjUHHe9"INW|CGE1??eBrT;s`_afjX');
define('LOGGED_IN_KEY',    'zlxwH`VsXpi;IckvoE5R@J)Sau3J+CaT@E*Wt0ZvB+K5sY8;yLo5fYva77"E9+ts');
define('NONCE_KEY',        'YsswPucB";h`zjC9bAIGrJ|d6ereql?r*o(YJuIICaBhp(YQ/Qoig&++l!BvaYv:');
define('AUTH_SALT',        '))sOoOCSaiJIAYN_ooNgG+AWKTt*np@(Ik@ke)XQz^sTfIhH)/cweWjgs4er"$b/');
define('SECURE_AUTH_SALT', '7/bHuU(U6kB|Vl@n%FLc6g*85Vln2zn$|Jf7*CU|Kl^Mvi%l3@8`G$bInMrxO_Nw');
define('LOGGED_IN_SALT',   'jUaB#Lbhg67GX7&a!v/tS)i)@42`vvZXn2Pm`hS:%Ad"DIQ)Ph4`e&`^Fklf@nHt');
define('NONCE_SALT',       '0eHYqK/%|D!w6_lS+zT_Ox#oAJLP?XR4QqRJeD;3VZB:uT/uHRr9R@RG1Us"XWE:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_9289bx_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

