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
define( 'DB_NAME', 'truflatask' );

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
define( 'AUTH_KEY',         'n|}5j,!fMXl*ak+Mtdd})k!!$I~S=-}E)IK{+1N:|wWcD}z+2^+?00UB[.eim&ls' );
define( 'SECURE_AUTH_KEY',  'Z@^22Los#; IBiL#7SXVT #WSy,0bf8SA^f/2uE$I9roY&>la_g2GQ11FUw0H^*m' );
define( 'LOGGED_IN_KEY',    '&H(]</{^(~gp _ntJ6v)Hh&$6(BhH*WB9jh[+uR&Nkb#h:O]&I{MCi4bY?$|v2E2' );
define( 'NONCE_KEY',        's^(LG)lA}*EJ;r^^<XU~yK?k;dp[#*yF7L_XNsVC%]&P<0zdd+,%nhxCtcb{Z-a&' );
define( 'AUTH_SALT',        '[*h9~Q76jGd0;pPf~TqJMz%&$pUf@E=C.Kl%pI|Z[:2/oZD;QU9V<taj]gC4_oV3' );
define( 'SECURE_AUTH_SALT', ']Ys#[lkBhB&43~v>B^nOSNr=sx=H|plLmu:NN=,|2GH{a@u#S4~{<e);lZuk>@cQ' );
define( 'LOGGED_IN_SALT',   'zCl;5;zirFo+!YvM+m#,bYPXyI5uil[m.<8 5*5Emx(51*g_ix?]$)S<vN{??rax' );
define( 'NONCE_SALT',       '-IR@5dICZo_zkACm%mZ>Ql;!9M9+Pl}uH9FFK&5?Ko8{C{_: Y6?!zS7~zfg9vh7' );

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
