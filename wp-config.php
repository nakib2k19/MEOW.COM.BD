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
define( 'DB_NAME', 'MEOW.COM.BD_db' );

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
define( 'AUTH_KEY',         '9L06E? *7!ThvvfuOy=&Z+tF+}Hyx)1rHg!1>*7>.xap~>wXTcu{@Ki!let0R(d:' );
define( 'SECURE_AUTH_KEY',  'qh^{&B$ed4bIq!YmrwLt?=,=pcQOHL{%}qNgd_f,0*F4/lM-ay_L!B{0!6*gUrjJ' );
define( 'LOGGED_IN_KEY',    'RpvL>sbDL;S<Gm#LL_=Xg.2mtvLH{%%s}v)H;3*[b~2p}>~)%lhu3I3lK]{}kKyn' );
define( 'NONCE_KEY',        'veJ -3G%{>NFa#(xD9K];w8+w7S8t^niJJ65#G|.j8A[1~ghlDt-;5H{yDEwih?%' );
define( 'AUTH_SALT',        '&G{zAvk6Z3ohgeRDjq;jYvvpWy5+fhLR*hC4pX<Pa!6Rze{#n&+2ENOagg(AVA3V' );
define( 'SECURE_AUTH_SALT', 'mJ#hbE9+^>%T{eo,xn@LrQp|3VJ i6lb<A?r!;#%o*GCkVc+UxdV;rb`qx`07vNp' );
define( 'LOGGED_IN_SALT',   '-`9xCPrNU(^:MV@^T[$SS,u >e6c4PqQ~uE@;R!{Je:i=>n Cbw$GAHbtPOh?1=Z' );
define( 'NONCE_SALT',       'BJ#J(J~{P){;{J_B~bYRZcYe) $|#&KTYtc@w]CovVb-+0 .$G)f<FmTh-&PzJ*@' );

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
