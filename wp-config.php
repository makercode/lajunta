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
define('DB_NAME', 'wp_lajunta');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'H,.;8K7]lHZ%tKbs@60+Z#R0{>B/@:Uk<Gm37>9dE.+J^LqK,i,):5Lm5ftHRp>+');
define('SECURE_AUTH_KEY',  'E)eBd5No8ZRRVC4%t+oGrX8?(uEb<K$%Zz $p6gw^YMb]mf:Unlw7,f4y9NAW(Ry');
define('LOGGED_IN_KEY',    'lBl#rdRXd~~1a6v3GhQt[JGZVN2VKIg8pl9}(Ux}lKci]8f+n}uNV:HZt(#l/}CO');
define('NONCE_KEY',        'sI$4N-`?I`&4;lwv=6MZt>%Y66:>wU}4LZ`JjCSAn=&*<;:74;9K?YqQh|4g86-T');
define('AUTH_SALT',        ',ui&jl[G}XCPj:wcTNn$BJ72N*eEc>#!;s)*ducNyOlA/Y{SU%ET>UF%1pQdmT4V');
define('SECURE_AUTH_SALT', 'g}w}XVy){gg1-%0WHcy,2APf5tfBK`LqE-Jx]!!+p3Tyu1@,7klyTQzoukK]oAL/');
define('LOGGED_IN_SALT',   'cG6P{-o2RZ{l&TKH?V<:ov>,:wM$}LJJ>2{PM%jY,74,Vc_b()hoj|is8U}6m8l ');
define('NONCE_SALT',       '0nRkX2I=^X6<8zlI:)6}NJHjsUL-/>}^RH&({0&CSpC5k#B}2Mm)ymO%xo$dWnsK');

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
