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
define( 'DB_NAME', 'KushbooBhatt' );

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
define( 'AUTH_KEY',         'gWVPwaw r>qaY;|`V&c@h|k+PGZ5-Pxkl2-ht@dNG4s-^qKAit3mhaDSebj#Ye{/' );
define( 'SECURE_AUTH_KEY',  'bAmwhs/Jx0FzlWnAykW<jw%SF8 $o;=Qu/9?.bL!.K7`93**vcLGR8|]7*NdjmC1' );
define( 'LOGGED_IN_KEY',    '`T_Sx+.WAfvMfnj;Tj)E=B;z=T1?o7msR!nUC0Mz#M0H&iFKElpq_[.jUxas-u8|' );
define( 'NONCE_KEY',        'P,T D}N/dQaj?@cDMM2ccD>[_ 6uj4eQ~^/hYZ>th8nc>:-0_W+~wI?}^^[J`=we' );
define( 'AUTH_SALT',        'CcszWCzr$>b`a#Y !g*BNe.x$YjjY3oR[12#UEIWF: q%+y%MBk,8+8.CEQlejRh' );
define( 'SECURE_AUTH_SALT', 'KqGfzeAw`N1Ji&ff]n9s)V*7AzeKXxjT~LesAcyPR>p;.t2~2-{c2:+0fP91unt4' );
define( 'LOGGED_IN_SALT',   '~#X0Wng>srj9#]&L>Lti]uQh*Q@hT5|Lwq`L^/Y^X3kb3s.:RQ#`|4>MlooyTA2g' );
define( 'NONCE_SALT',       'vesbK7mLXI,#VIb2C=E.^je!~]xq(Kx+w2PoUimsUr.DA7suylJ`|q]lG5bazAbm' );

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
