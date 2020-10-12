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
define( 'DB_PASSWORD', '6a9e7493ef3f5991299d1eb58109a87ae11b90cd5acc461b' );

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
define( 'AUTH_KEY',         '9}tc6!)SyKbPLOTsA08[A7oYV!pk^e8c(!QDFip=kG<ksBV1p`Uu9HiDfA{dp@Un' );
define( 'SECURE_AUTH_KEY',  'bS6&1ye z<YIvM,ybU7H,PT1IyQx*|*F//=Scz>#/d3;I}.XH[CU8[]T5Ov$; Ol' );
define( 'LOGGED_IN_KEY',    'w|D7FT%BJYD>*P>sN)hae<8[y6%~/H,/;s+T9[`SVej7K3ww3xkR2l&weF3-Z.;q' );
define( 'NONCE_KEY',        'p,`4B5e9+S9oe(liRaDCpn:j,4|#~jZgKaSg+S}]t,/*6mGz$0-f.}_gn`rp;qb:' );
define( 'AUTH_SALT',        '=_5yS,<G9sz|?<%x3fn4#~.r_QNia|k{%TH%hr3Ty?5n^ta`%mdz}-L^ol%F5l:u' );
define( 'SECURE_AUTH_SALT', '<g((v1CI9rj,yp>bYfJ-k?FQN> .vZ?~%/wU]=Q!V3YLH8&5^iyw7bUY5#)s<:sW' );
define( 'LOGGED_IN_SALT',   'h<NC.e`hy+TlCx-6!/  d_~}^)hXkY3#VH>E{3h,ulWcXs(jw^IIEiKeK4f9*h[:' );
define( 'NONCE_SALT',       '1FbQ0SwSNpWv&e2Ta[]zJc-_p!cpp;C>9;Y.FkPC_+3]qQ Xp^A02`$S.} !SSL/' );

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
