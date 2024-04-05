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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'wp_demouser' );

/** Database password */
define( 'DB_PASSWORD', 'testpassword' );

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
define( 'AUTH_KEY',         '|aD_w *1K*2ufC?d^oeBVo`0RHKj~pqI>}U:U)hudS)**Z-A!8eO}!t=J|12aWE#' );
define( 'SECURE_AUTH_KEY',  're0!W;zX:.{`->cJXD2ZOWL6KnR$17RIucL.c&ScMz,YH@a}$j=_9>Yw~jrg;O.M' );
define( 'LOGGED_IN_KEY',    '.uj_Y@av&s[Dh^C[Cq-*oAKDwa%v-I:<hv6,<nejgDno-{1;P,47$0u?w2ThB0(r' );
define( 'NONCE_KEY',        '21Ia8fd0Q F&pgt(II^f-+~#haU;csk<G<sB8Cqdw&{7ygXxYqf/XWvdSI8/Iy|Q' );
define( 'AUTH_SALT',        'RdDD{|`;B7J*DUs}p*Q{JHeTpBU?BG0 K=F313L*c#[ZY!gF!}4eh@hpmb)G:K!;' );
define( 'SECURE_AUTH_SALT', '0)ZJ#Xs0^s;zm;K=31%O;&?0Mk1C&2`$./%*:`KdqP8w&PM}gcjuSjUzLq[X1Q[?' );
define( 'LOGGED_IN_SALT',   'Soyqw#ces<a>Rz2n3Bh#.ba]ThTxPY<oJtBsWXUro#y7vF_Fi_5[YH>E[t?<U8@U' );
define( 'NONCE_SALT',       ')W.2>S %i{I%OH;LfmF<>}q|[XfY@_W#`BL(uC`n!Wjmb$sr?V$QJ;V9?4>kQ[X6' );

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
