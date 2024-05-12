<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dblneqr0gohgxj' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '`nv!w5>K&i&S@F_@jE$}C*rLh7F5tY}Wc@cK194}(lS[k&$9d>=Nf0W9W{-hq(AK' );
define( 'SECURE_AUTH_KEY',   'cU<;sC`Y3j@@NH1GLUfa4Qz85A+Q.d59?$WeJw E Sqw&:8A#9Nlj`E/@B1IoBy8' );
define( 'LOGGED_IN_KEY',     '02-*M;Xqr4Pz@;H{LY~y2k>aOTbSk8i]gL!Qqi#31E@fR0l>`l:uz pYbTG* ,p6' );
define( 'NONCE_KEY',         'u9Ls?-_}vt<U/#}87H:[Q11qS]vZURj>zYr|kcUklYK%}J&<N3g!5HdpgjR~b|_`' );
define( 'AUTH_SALT',         'XCBB%C/@8+T%rpZ&r/a{;6-Ynj_7&8`hl4yQV|/VZk3^H&1KOBuQyr]{.TenpeP;' );
define( 'SECURE_AUTH_SALT',  'XJI=_bun8dBS3tAgzuQmemn`7i#r[,$)$@PY!jQc<T)hrTKd[bQArQEd~jtByx|7' );
define( 'LOGGED_IN_SALT',    'whk1(2(#FRT#v,>`#[j7E6T>}_Kyt<0wT2D}q@0~%z@j*VU6<b,1%8(Y]+i2(T:`' );
define( 'NONCE_SALT',        ';bMW2Yc,vfjUbG:MEoV=4u%gETx#z~NaBF,Z/@k:h[Hi|$w,3&*)#t{xX(F[>PBj' );
define( 'WP_CACHE_KEY_SALT', ')I6~Ur?0.ahrh;R[V[A(e5k5&G{+H|VS+tnKwI5PNUm%CO+q}]98+ki#*lMd :w?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_iumy_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
