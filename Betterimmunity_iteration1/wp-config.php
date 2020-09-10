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
define( 'DB_NAME', 'wordpress' );
/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'adb5e306dbdf587197e990ce712be960f7a2c3996d3ef547' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'v99c6S.UWU9Q8KWO d|u? reNfU*[T4vsr>X5jv6&>#||x?<;mr/z56N7yue>4@U' );
define( 'SECURE_AUTH_KEY',  'Yl(~S!9=1?FpaCf0G_<[Ys=y)ol$j@y(#5~M.jc{HUyfnJM7Hq!JbBN80+<eRi(0' );
define( 'LOGGED_IN_KEY',    'ljvl0>7qB]>-n]A3N(rWX>FCzw1oe}7?N,%UTX]yl+IdipdIuPxb(xl_xc4a8n[+' );
define( 'NONCE_KEY',        'VrC/<%3hOV~zkBB#woGO)K48Y%w-{=7gYg`uQ/tXZ,JQb$SJ1f} Jj%4r}+I+LA{' );
define( 'AUTH_SALT',        'uLwvB{m#Ma;j]QQP:WA<ISfNfbyQa!J(kW/Y1J-?wk<50vI]j,bEWr7&V[j1K!!i' );
define( 'SECURE_AUTH_SALT', ')6,Z@G2vsGbaA%/dCc^pF|JK!!4CSDV6m^^^H(fhqJCBp}bN}p]Hx?;+8O1yP1?*' );
define( 'LOGGED_IN_SALT',   'SDnZ|)}e{pJBI,93<2$4b=J=AI?TzPBZC$c/3u4pI@Y//}U8?XV$wG*,@6M;H]*f' );
define( 'NONCE_SALT',       'L@-LbJtG@Eg5bYon:zHe{-sBg7mGvt}6{#kN:/*0kYXhtN63u==0-B!9KihImx=]' );

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
