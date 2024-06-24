<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'borsh' );

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
define( 'AUTH_KEY',         'r&?tQG2S*4b*wkyAqPP~0EF2I2dE);(Tg.Fo,jqLUAWGv_1YPJ> L[|PX/)h!Z1a' );
define( 'SECURE_AUTH_KEY',  'ChpX5Hb~_qH,fN$.lT5API.OXrH$m9BN%e(W}q)umL%A8+6InO |L(o+k/ 2~PgI' );
define( 'LOGGED_IN_KEY',    'mX5py_L,AD@sfyf!}<#S#LVUYnTya)b~q&b])#HCZ^PH&<]^i9+aTHm.!7pE)]>U' );
define( 'NONCE_KEY',        ']4=0vu8FvV}|v3CUGXrvqXHzX~&VE/E!0BpS}v}W$ImL#p(+cFU(M [_*u|C0b)4' );
define( 'AUTH_SALT',        'oE31Ngb>0<]k}%RV1VI!Vt2~p,/<xkD %jFDU!PZVfe;f?-UR2|%8`3NeZ^$rU6e' );
define( 'SECURE_AUTH_SALT', 'w:p*A^B)Lgd-yQ`dy7U~HXa(pce=h+}R)C*L7B#F,ufj4tm}Tj#[1[RmO${_b+%Q' );
define( 'LOGGED_IN_SALT',   'IAv|djyr&RR,;I#3^Z&u-<K&E9K;|z744Z}v2b! yWo6DZ,A-hH.OY-[1uY[$aj1' );
define( 'NONCE_SALT',       '{>]v^Kh0y~lSM2F5XMCn*G2F7hKg&C7x@(l&R0<sUGP!TSe%OEU)_.LLQl7**A 5' );

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
