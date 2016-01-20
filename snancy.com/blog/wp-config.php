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
define('DB_NAME', 'snancy_com');

/** MySQL database username */
define('DB_USER', 'snancycom');

/** MySQL database password */
define('DB_PASSWORD', '^ka9jqjg');

/** MySQL hostname */
define('DB_HOST', 'mysql.snancy.com');

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
define('AUTH_KEY',         '7`I:)I7jN@^9`91uPJZezb_prtM&U4WfaipurdU:4lMp_fVu2G7FRDOBz:xLLn1i');
define('SECURE_AUTH_KEY',  'OfX:Gg)3g&3L5FQQ*O9rmzdy6eSnK5zx9x?J`rf6HR9)iEG$iuXCvt;&Y5$~!sST');
define('LOGGED_IN_KEY',    'JkN);iQXR1%uyli$5zOZXmEo((XVqfgH13f)%;nHLJDh~9/7":7#5!9ZL/Zog%V(');
define('NONCE_KEY',        'HfegVHCM6&r&jm|U2B#CoF4eOT|yq(StXg_)L*SZbrlltBS9RO|KqJ6Z17hof9d+');
define('AUTH_SALT',        'jV7kB6U8rI^/ZGdGE9W81udPfR#GVLgp7VbJ4RZEnv+dmGXX?GH)dd:%3`8^/TWe');
define('SECURE_AUTH_SALT', '+:Qw|%`_n+h;DQ)uzc;177mnba:jLxt~wvl%Na/qG#s?T@D/?Da5mD/`;KhwDtin');
define('LOGGED_IN_SALT',   'cwRcZ9I84lPmK|r$?EQ17eH`|*xsk8#~dCE83ydpuLXT%#7)1&rAWYsrweBSXg?s');
define('NONCE_SALT',       'c~g53R5*+WN6sqwgL6&9Xfhi8LKGd&^oveyEA22qD|GUQMcm/r0UIgevpPAGlpnx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_jbd5ee_';

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

