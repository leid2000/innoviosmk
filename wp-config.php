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
define( 'DB_NAME', 'innovios_site' );

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
define( 'AUTH_KEY',         'H~fo?>TO+9PAVi*1tP?^dHSw`~-G-b%MPI&Ri/^PqjvH&k*<azbVS4<5&>fY0<~W' );
define( 'SECURE_AUTH_KEY',  'PHB`@I2.FC?[9-&]!]=pHj!i4Ek]v3?5f)4I=XK5qHMGU{Gn:TYVtqT_k!quF?]<' );
define( 'LOGGED_IN_KEY',    '6bj?SxGp$LMlk32Bq,cd`zY}y(/8,9xfIG>@$FNw8Qw<jYtGL_a +E`JbG.#Ws`e' );
define( 'NONCE_KEY',        'Q3@;==m6KFkUXa%grVrc<ndzKpX=ZDnWIRWE!i(J4];h@tWV#4K:]VLs?Z5$BPef' );
define( 'AUTH_SALT',        'w_)4*AX.&!<gS_}9i0b9>Y||hdO3Va2*8YF&Av!<]j2[}uUJS6#a-)*,/5t,kUAX' );
define( 'SECURE_AUTH_SALT', '[Jyj}0mM;`Fs!m@?tx8mhdd{XLx:/C^LVS&h:/Twf(uLN2+pO`WZ-/G15tn!LR:}' );
define( 'LOGGED_IN_SALT',   '2wF(0j5uqzY_B{,RlzIZ-Q.#(SB&-fLcJZOF,{)rHzRd~m#IRQ:s{Es[iUykkzz>' );
define( 'NONCE_SALT',       'wjQtbFi(7c|Q^4Fx}GDm{Q,~CFZ<zK$FiTr+Ze:fY;}NTDAZIW3oZ)/nTc27|3ec' );

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
