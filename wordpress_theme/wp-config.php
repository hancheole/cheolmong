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
define('DB_NAME', 'cheolmong');

/** MySQL database username */
define('DB_USER', 'cheolmong');

/** MySQL database password */
define('DB_PASSWORD', 'cjfahd1234');

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
define('AUTH_KEY',         'R9(paQ2@|:u&$50Wt9B=fGHyuT|ms1o=ZQ& QIpy/25Af- og?*imtrU)ofi_$Q>');
define('SECURE_AUTH_KEY',  'S!${!eQk{~~Lq$--{x*)^Cxx+]nVilyw5ZXFkw#Hwn|_[ 2>m1@|#uFh+!3ymu?9');
define('LOGGED_IN_KEY',    'U+G >3U/,JkO%QM8)nT{1DVBwn7jY|;4x)mSsX5*a+;C&<=W+|z+-]P)zGl.#A-E');
define('NONCE_KEY',        'M%]60m/7>H*R0Nd]_doct`aumwf-/ATe+o7?,>Ry4ig.2+5I<P;Qwe2>8Ux3+pSq');
define('AUTH_SALT',        '$_zGs=mw2k9jhq(M,1}wZDTbugCwsB8P}3V?%][SyHp_vD+NqTg3:gs^|W+Sbo$,');
define('SECURE_AUTH_SALT', 'g ]/vz23J08tk!Cf9Y#O**,wbtD|~NwSS)<ZhZ,70X^8hE)z-^AE arH9?zj4sO3');
define('LOGGED_IN_SALT',   'G4 0+=AiY:Xf~%yKsoc!ekc93e&-_@< N-7,#uNDu*_&l&D_)_lq]*-3G7wTGae?');
define('NONCE_SALT',       'Wjgj+=aqv_/c;OBd7>-r9gm>ooRD%S/Q,})po@lr|$!uvCr})j Cl?`sFg%rXRTY');

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
define('WPLANG', 'ko_KR');
$_SERVER['SERVER_SOFTWARE'] = 'Apache';

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
