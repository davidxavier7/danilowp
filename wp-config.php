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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'american' );

/** MySQL database username */
define( 'DB_USER', 'american' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ROUpKpWTEbM7xSre' );

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
define( 'AUTH_KEY',         '8ilm6LwwS)0,<|#MSUHX7D=Yf0$3OC2!I97E}=|/3ZAc?AEx;k3,v(?QK{S,PdI>' );
define( 'SECURE_AUTH_KEY',  'x4:f7}j I%a?)F5/w%68+]n,EFTRiaX@P EO;maX6{0Q9+1+?;31]UWq:=UGvu`8' );
define( 'LOGGED_IN_KEY',    'wG1e/L6H62%m2T[yH7GJA{e{u8 p_dN~6%#9ZYQT~A:mem[CM !1bp4F,m&B0rPE' );
define( 'NONCE_KEY',        'E#R2}X6CidU#`l}W%k`$`svvs:8g<rd+j?r4PFp$3Xs/<R3p/jY<19e>UZv,Iwv-' );
define( 'AUTH_SALT',        'uw-&w,l#+ GN3O*bQRLMH3$b:@Iw;JqMc9^@wS4)DNilz<ON16J$`U ]!.4E+~A5' );
define( 'SECURE_AUTH_SALT', '<(;LpX&{je;/A9Nw~8h,$W,]1%i~$PyHJaBUhvkzY8ygv]!0V(?@v4)yI5w[2KTt' );
define( 'LOGGED_IN_SALT',   'EBWAJyxNz{w|FjS$H| UVE`.G:tFee+quoHa*NGSrb$J:TD@$.^6QJR5z5xr{WCT' );
define( 'NONCE_SALT',       '+}amvrr=wWp4b6[O!W5b#6p3*(>XKs$!KybC&dmgA8ixRiw@qaKy.#Gu#krEOGAO' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
