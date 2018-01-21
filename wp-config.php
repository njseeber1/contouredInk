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
define('DB_NAME', 'countouredink');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'yzNjQ62{*,yQ0T^_2U%4|[9kZ7XS9NNn[K(B=8`N}Tz@K@+3jYE4|2}6k1r&vx11');
define('SECURE_AUTH_KEY',  'i{rds{Okfd893z<+ZS]7hvxt&}qtp4 }6+Nht=1a8xN-CNQw)_h2~{#,L@vx8s$t');
define('LOGGED_IN_KEY',    'PIo+`.N<y?G/NA=_aAb3Q[kAX&I;bL {z@x!`]Hk(0{%%?fw>*ao.?.VE9^::EZ~');
define('NONCE_KEY',        'g:Bgc9I*uMwTaaQO8*0m}mDYFy j;ZHg8v4`H:(bAppZ__*S;O^H-GA_nr^C%5|{');
define('AUTH_SALT',        ';ctMSbXd4hs.S(@q>p8`iiz=,uzUk2:%B;v2vx] C37cI_{->$o[IQGZAW] [O{!');
define('SECURE_AUTH_SALT', ')``,4D03yr=|=,K{YfRVVf_B3ovXl+eRS2Sxwf+s=pTOM5Lzp+T*8&Keui_~3SMF');
define('LOGGED_IN_SALT',   'sUtS):-kN{B;l$kmPB-MS kvAJR[y;/>?+%=k!M K.sfV;]qD77awcJVqMD~bspw');
define('NONCE_SALT',       '5FV!td:X}u|LGdYk#69*Q4fUK>1GAxPMaEzE39& ax_Uc-oC#!%WvlI~TQ@:*)g1');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
