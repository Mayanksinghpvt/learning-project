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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learning project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'HQmvag@;FiI0@1-0mru2e?%h2_rwR!>-9b&x+nBRbL%p<,A(0IcMR$@.q<3064Vp' );
define( 'SECURE_AUTH_KEY',  '>6GgH[:rZ=$#|,?.QKVXdj[RM?{K1c&oOx]Q;eUgPuv.QdUiOD]E1tS{zm{=8h< ' );
define( 'LOGGED_IN_KEY',    'Zhv;NQBFuiRVYpNkT{7O=NHp}!g$7b5v!Su<@1z}CrTw].q:|)`39iR1Ynvpl/yr' );
define( 'NONCE_KEY',        '/U!.z/u)8Fh(roE& lHH/I*odI~IC-ZY%T&}ZDt=P-VzJ_H*/.!J|Qcg347*>MO.' );
define( 'AUTH_SALT',        '5L`]72^i+fmYIpe CL],k3TRi]b8}}TCU6l*n%4M2[bbn`j_ofY/w4_}nGSiD,ox' );
define( 'SECURE_AUTH_SALT', 'Xx*):}e2.DB3{Pzf:tSJazOD:u;tgif]U^`x+?`Gk%;|j0Db8*EGZ9wOpL`Ss/q/' );
define( 'LOGGED_IN_SALT',   '^A2[6.q2j_u1*sqzM,D8^/rB{J0+Rwm^<|^I|qp{YMaPdx8.xU#Do<llL@BTTEw-' );
define( 'NONCE_SALT',       'Z$*-}rky6Nz@2_.Fj)G&Y2x;_]k+_>+(HVS=$RvP[BB%7,(L5Z[&^6kGxEI?^jVd' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
