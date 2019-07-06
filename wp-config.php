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
define( 'DB_NAME', 'umairshams' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L1jl* -FPYg8E~Qxo~^BE-Tp1%PayD|@rQ>Sn9_GgXtMQ8y:2{7q9-977?},e#]W' );
define( 'SECURE_AUTH_KEY',  'spax[pGB%7Lzjfkm6P(uhN=:.sia%V2gUS%x!:cfUGN(%%4R]0m9iig^?|l{J##B' );
define( 'LOGGED_IN_KEY',    '?p(FdAHIUlMhzF?YX6-)`xf_XUa/H$lGAMNj};?BGad*>[DSD >K%O`Ks5VuqH(;' );
define( 'NONCE_KEY',        '&wDW>iav!Hs*S&9ZY}ZUzS6`e0*e}Y9/w9~aP-FkNM?b~1,]r]21e)$Ls5=yi.z~' );
define( 'AUTH_SALT',        '-)l7,Oy+t]G4,rFPT[9Uo7zvq.P#_x=0svaG1fZlB]89#$Ld*Lj:hwJ5.g(Du?m|' );
define( 'SECURE_AUTH_SALT', 'qJ3_2L!EW6/c|)8II6xM7lLgUP^9x>}s`:LvCZhU-}`zd)S<!H3l0;h*2K=$,<!:' );
define( 'LOGGED_IN_SALT',   'R0cLqOVvKr+y_amy|<no6eDp++v?y-]j#Hnzjq3AQFqyASY]4Bm+j!E5w-RxPXrd' );
define( 'NONCE_SALT',       'ixUht-k0U9<5VN_K/Q+`IBI7Q^K)8u2^TdU~rAw&fu|&{ZhX7<mrjAymh&id40&:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
