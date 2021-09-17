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
define('DB_NAME', 'vonralls_wrdp17');

/** MySQL database username */
define('DB_USER', 'vonralls_wrdp17');

/** MySQL database password */
define('DB_PASSWORD', 'cuIsw77REYbO9c');

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
define('AUTH_KEY',         '&D5bY9KL lD(GDIeP<CzrV[Ji+=TR[u<;BJrFb8 gy,/T.0>p*o&^~K7`WiiWlxZ');
define('SECURE_AUTH_KEY',  'NR;@e/,/!cqzLP@+`CbQ5 #02LWT.uqnE**&(n#V2%XSK[}zV_{92@M}x5S&=d?<');
define('LOGGED_IN_KEY',    ']2,WH2?ObnBe{1dSO#lS0~GnM/FLr%{twy*:Z_@a<W_6tI0E$p[^[t#]K#|IgZHm');
define('NONCE_KEY',        'zB:L9ImjnO2Jy7wS2<*>=u~EH_gCVY}oEM#7H7Bi{S-~zC89ssDkEE5wd%?Kg6<7');
define('AUTH_SALT',        'N{OuK9:[ GVte*?6=%3OsNKjz1P=O*vL5<>b-gogEuR.effx%kgI-Y3S7|P_+[ne');
define('SECURE_AUTH_SALT', '-`tF}YpjS^OkC%xP^NEt|PlNP4bTdrl`R,R&zb;=4iUG2e9EW;0LQ70YSFKq^<[&');
define('LOGGED_IN_SALT',   'IYl(@rblISw?to/DR+N{D<:c48Ex,4$F]J(Cd:BH0K7a5g*|)Xn*r!~W*-^;wcwN');
define('NONCE_SALT',       '+:WvG7k4%NC3bq!1oqXK{+Sf!kh8v|b(DU{{YDRgEk3})&]I0N`egT7bEJCPymX.');

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

