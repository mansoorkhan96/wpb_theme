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
define( 'DB_NAME', 'wpb_theme' );

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
define( 'AUTH_KEY',         ',Y6ubSK6frRfX>OSi6q]NEEJda9g_1U`?ojp1MGyqP[kuO^%kp=S_dU9AMcs}/N*' );
define( 'SECURE_AUTH_KEY',  '9y8.<<{$8i{{7Y{7g/`S:i(|StkZ*a:ntPjkCFES`C-gBO9(VWl*To[Iz3`oZe-F' );
define( 'LOGGED_IN_KEY',    '?aOqB;`0&_DN?f,,z`>uxr5r2-sK10+:n#W][z8}5w+t! ;NiVT@_s9x`ar3ntV?' );
define( 'NONCE_KEY',        'VpLr{]nBS!X $:7(:?C$9x<m95p!E^BpWARbI{)G65hH<KJYR%{Oj;D9x<Zk&6Is' );
define( 'AUTH_SALT',        'q;w}$}j^wqw0nrGV%f|WGi&%WaYIC-L#ijkD&Lg.I(S3]@Y?rSy~+c{(*k! PJ>%' );
define( 'SECURE_AUTH_SALT', 'yW-i1i.J?-_T*1Qy`?X.@,E vy4uz)$(DJrPK6I*EPaZbX>NDjx;VO%[dZ81^tee' );
define( 'LOGGED_IN_SALT',   '^W*&:a=sU3_8kw$SX3!NI#smCL`z,_Bpq#io+LDed;w_q7F]@t|dwSa543/_TS@s' );
define( 'NONCE_SALT',       'X&Q`>)P&~3[=6GO=s=M88=8CqwG&hfo&+rFKB+2_%F5>Ads2tz.+Ng1Yd4=+y;?u' );

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
