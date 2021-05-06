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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EV7NpXXf' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ';gtUh@tn!hwKbul.Po2qE55PNt P-Y. )A;3tVICVfLWmKp[Dbx>/x]=Yv2Tk})~' );
define( 'SECURE_AUTH_KEY',   '?~ud{s8+/@zGExg4qc+@9y[#H;cLwwAK`$2VAM{@8|K^wE;^BdSjMon_yl~^=)1H' );
define( 'LOGGED_IN_KEY',     'VEAfpgT8>1P-k$Vo!kyBGKj?Aq.Xy&P8tRH@,qfCze9NOU9E}y0.Bo,NfFZYWT/1' );
define( 'NONCE_KEY',         '~i}IU1V[.V3]-EM!C5Q70Z41ea&@RibprgGU0]?FNh<E;M2tsuy.>{-vNu0lc/m2' );
define( 'AUTH_SALT',         't2P_#mp%OQ)B]gPD]>{.%SpEz2Q2I}We2F}2]YojWn,L&U&dzXZS@<,R-nu,z]L;' );
define( 'SECURE_AUTH_SALT',  '&Y[%Dsy,uSSY@9L7.[Wmscn{5ij}.mrkmT[U(I;;*v+if#W`TWO.cM4,/w4H:)IH' );
define( 'LOGGED_IN_SALT',    '>gazw}d(xXk>xzV!dfZ|NoRl-a0sR]O4u{[H*C3KDCxpCN a2vJ8$%1e|dhMt,;Z' );
define( 'NONCE_SALT',        '`)Cyb?piE!1ObDSGd<B1lOEfS?j(g acE)6Ff[Z-c{;]b|7a%!}|uJz$8CmH#C(=' );
define( 'WP_CACHE_KEY_SALT', 'w[Q6f/1_eZw!_ik{&li(w]GiM{&zfI*R/PB=B)k0p(X&n3W13.0]~M*9nz?Nf;Go' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_SITEURL', '35.240.154.242');
