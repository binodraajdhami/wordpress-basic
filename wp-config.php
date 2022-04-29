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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wordpressbasic' );

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
define( 'AUTH_KEY',         '{}@wBf7]VpeJYW]`V)eB]+lfCJ0q0o/%;ZXI91cms>~d@/TI1Ca9J$^lWs4vFV]k' );
define( 'SECURE_AUTH_KEY',  '1b1;Bd20.&dlPm4}d,l1HE`vg:_f,(GY7~Sk+WjMKW qR.8ZZTqUJ+]yh]n?vZ%B' );
define( 'LOGGED_IN_KEY',    'Dy2Ra*^FtKP$])AmJ_I{5u7qV(JA:_tMo9^Z H|uU<~I[&YBE7>KCA1guIe~=Xr@' );
define( 'NONCE_KEY',        'aKR :E2zq2^)aoEK8[?w|S+bV7{?b_Q86nmQSw$w~(JN)t&(lOAI$FY-X|ez+%dL' );
define( 'AUTH_SALT',        'xv=/W1C>Du3!CnuRaCQ/[FB^}C@Y._:IkfxQfPB?(hmAC`aFUYG2grztW1E9R0{G' );
define( 'SECURE_AUTH_SALT', 'ov87K@Gu0Vj@>Demmkg[nu!S2Y.R#DAa gCjISF#r%d0U@3oXy()avOsCF,(lv9G' );
define( 'LOGGED_IN_SALT',   '%Bz^&}@b/A@+r:9*d*a(WDDD&sNi4bF%TRS]t&WA[|/)j80zP)$H 0g:k.FR}fyS' );
define( 'NONCE_SALT',       'TK?uDvohfb-}hO9T&U59TmXwQ_/)-zK$kMGQV@eZ##y!xpY8Se{Mt#/5VZ$Wf@1;' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
