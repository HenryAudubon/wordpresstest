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
define('DB_NAME', 'wordpresstest');

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
define('AUTH_KEY',         '{9M4<bCQacgz)kRLa,[>sRNF9ld#k (`0k9E7gUbfuXa`a@`?hW5n7?dK//~,3b|');
define('SECURE_AUTH_KEY',  'N`|dv;xs&PZ]?=5Q#hl.y?0c1k!{JJ081}xTkQgya_Jr:`4%k5DBSG$J:muTlpg$');
define('LOGGED_IN_KEY',    '7q87rR}!@NEbhHCR)q(eC[tc@}o/-`a-1&2Q^r~jW$n%r1}@TUEl-uzm|Wp8$-8`');
define('NONCE_KEY',        'KXE<^ta+V8QKuN?w^M[/[BM9_Im5&>}1kURYaAi_6FHc%!ht<6q.(=8u.:KyMFus');
define('AUTH_SALT',        '*_C7F%gHP8deGuLm-j5;JDgQ4`hM?g}WkF3 KM#49?bW-{qDSnt`p ikI;B;9Kr+');
define('SECURE_AUTH_SALT', ',B k5*g9_,]ZOhnT U:p<Rj|p)g3>u1klujb??:Cz+3n~131*w DwYx.tW~GfV*w');
define('LOGGED_IN_SALT',   '`Pp<TzOgA@4C@jE+wl[f8yE0oeA9I1$R~VXZPB@;n(qvAY;kJ$/$6HQVLeoGK)+l');
define('NONCE_SALT',       'zxEc7h@Q?9l@z~e8*HiZT*)k+h=iGWjBJ[.D~P} l)>VV8_maB BRa66jsHLUq}P');

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
