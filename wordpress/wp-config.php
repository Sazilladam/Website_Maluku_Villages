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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Rmwm(g(m,Sg}s{d!lO<`yhGa69x3V}t-;fo/b7YTQ?G:,Lh][oB%;x-l[P#&z6+#' );
define( 'SECURE_AUTH_KEY',  '?XRe>-KQGQK-~/(VII~BdKC7Gvb;lW1|kETS/:3RKyILCnK4JU(NsHDp7oUhAO}y' );
define( 'LOGGED_IN_KEY',    '$>p&Wmr57B}@++EQf5XmneM~?}bo8-^/%s/=]St+bO4e7Ye]zaL)+7N*)_^I[`9)' );
define( 'NONCE_KEY',        'hv>>m-p`.*H3[tZ+~O_@9>i}b.:x#By/l*[k.X88q}$k]G=mvdglMhI6,A!^fV|T' );
define( 'AUTH_SALT',        'hS.|)B4ogjRyJ:9 *tH%:i]n5KtYC!}+_]dZZ-%IMxIaG|RnA(!w6&1i0vBG-bwd' );
define( 'SECURE_AUTH_SALT', '`=d52LYUyV$jB8+zrR^!/xBu?Vq:!?L5[S/<Sq80I2m0lwT~|qdv8X)vw=:7}YEq' );
define( 'LOGGED_IN_SALT',   '0^kC>9vzNRm2Cw1Q.dhRs+@0rNYd1vGqOG@AlDlt@GK)CM}8<W?r_aH_j3V-qn6J' );
define( 'NONCE_SALT',       '%509Um6O ![CNT|yiYaAG<38*w`6E(d)ci>x|?SZ!bnjl[[n)$evV}|mLU-plh!U' );

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
