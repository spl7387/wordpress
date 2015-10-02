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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'B~{bgx-HFNG/Y`N|F2Fv::2d)>&=tyf49dhf8T)Lsy%qcAXQ/p-]4B+? J<tspy[');
define('SECURE_AUTH_KEY',  'HP@Y?~Ra[=tNXwr{EvA7g!YVxbkQRUQ3%!M7h)mEO%m bM60!YL?>Q`e_ JZ(Nhs');
define('LOGGED_IN_KEY',    'jr`0Ga-<M7Wl&q)W EKh/d#L|GUK7E4vuL~zATWJ@Y-1+a#1a]<-EHii}Ov(%J,-');
define('NONCE_KEY',        '=dv<io+-||s*|L< LNUIPov_.hZEg60x]TZfw ni?cALW&-s3IH[>XR-C);$,D;6');
define('AUTH_SALT',        'I*7oNxkiEl61z(P@ll{GI873GVW4}D!9D5|XxEcb1Ow$^T:?Y%G%@T|`$v~xPeu|');
define('SECURE_AUTH_SALT', '@ITr%<2I`2#[j!;$@EtJ>uJAf|+p$G@{,pWdSo5swZ:XTH99)*&bfP|4/#tIwS[9');
define('LOGGED_IN_SALT',   'F/|pc(_l7dNa]m(tRuQp7XhMk[#+4r0r:5K;9$okB4TLtDL<VH:lp>pdY3qR[H<>');
define('NONCE_SALT',       'd&eqj$9n<n%bZZj!Dm#qw|d1jOx*<}|:/,7Y+|jcSTJ6.&+~rg1)TQ&aLlLfwe%B');

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
