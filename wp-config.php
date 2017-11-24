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
define('DB_NAME', 'wp_demo');

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
define('AUTH_KEY',         '|@(%n`</+OyM*+G+?IQLkE;-PlB~R$^N-}(s`jsZ9&PNA?`+]>@{|AfXpF&X*~rY');
define('SECURE_AUTH_KEY',  '}`vh/-7d?>S[jk!K}e$R|*0o,CKWb(X=2NAt7yD@=s%Nz:h3;PXk$YV-95,l^DT,');
define('LOGGED_IN_KEY',    '<}B(Woe0d]OAr%.FaMA6b<=j^vha?D2bMmt6waN}*`iV!q|5+C<aFfqD}yMw.OhL');
define('NONCE_KEY',        'Pp JtGMk><Sc+:ipCsR 6zx6-:WnN*7zb_1R4Jg+=%ZJn+?QKI~*):A!5EbB+x$c');
define('AUTH_SALT',        'J9$&xeO|E130AO}lns_%Uta87C+O/7UO=Q5b>Lo<_rjydIzu}?}3rXfC8cX9DeV0');
define('SECURE_AUTH_SALT', 'aniL0hHDrL7UT~hwvme~PxuE!bTAUujS#^ll`0j)_.Jy6M$eMWNcnR6@9OA^$X3*');
define('LOGGED_IN_SALT',   '*DbA;}^+uta^ACSl)SlJ{88U(8Z;(`M8GzI2Ss t|CEn XS=?OgEV!BhCQe+00<T');
define('NONCE_SALT',       'xqAL7dc{le3gR05H@jej}_`x)5XuC9/ar|TOL#hRH13jZ5USbv(1YNAASNh&Q~UV');

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
