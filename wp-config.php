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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Hy`u*?)4#V?OjkLN)U~G]DN+QDQ+4]3zz_HcjKs6P?M3QInx`FJlBMoEme*>]E4I' );
define( 'SECURE_AUTH_KEY',  'gbiUl4d?GK6b>goFl8}H1xuH*OMiOY6>Zxr1 `1t##<[(>%XhB%a(0tTYSbJwMzk' );
define( 'LOGGED_IN_KEY',    'b`_TjW!3lyH<rn*&e9]wL|X[,lhL?4yK#^aSDDpy@SBX.g8K8R)XO*gz{gZk8|)J' );
define( 'NONCE_KEY',        'R{NdffeZ+qFkZ[o@@P7YzV[Wqr*@suyu3s#Qmna?@TZ?r|WulrxdFAUT>NgvTV8Z' );
define( 'AUTH_SALT',        'bY]dI:jAJ#21.m:d@PfD5U.B:-A@WsCO(_R_M^^G6,} juM,1ksxc$L7_A>[iA!V' );
define( 'SECURE_AUTH_SALT', '+9[]bCX!+O7F 7R<8Uk!/KyivO9lqsko1HfWK;citl5kRW7r[?~2*AM1M9%3e^of' );
define( 'LOGGED_IN_SALT',   'jX)Kf]uacfIo2xu7oa.s9X.CG$F%;[Gf,(#G)t{8rlXW2WD},(Li*z2($rvcK!D3' );
define( 'NONCE_SALT',       ']fL)6D~3Z3?JF._q&^2K<V0&*p%+Q{x5H{G$*AoR{7>RS0!;*,*iz&x ih<vlghh' );

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
