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
define( 'DB_PASSWORD', '9e13415bd5ea0ddbc9ee580fd9d42f607d88e850fd545974' );

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
define( 'AUTH_KEY',         'VFaHly@{,<R}AKLC,EW1-_!P1p;M[@EzJA+H1sk=|kV~ $97dmTy`.^_X_jzFgOk' );
define( 'SECURE_AUTH_KEY',  'd,eZ7BhP}+5XqgC-hR*1n-;Nm2x.coCYZ^JwLoV#lbJ;upJOW~9h}1f]}C%*#U2a' );
define( 'LOGGED_IN_KEY',    'Ro4/({N(&t1LkT_yWdwY(}egHLHh!0U&F]Zu{}2S$,*V8YSEo7V,}!5S!rI*wzL0' );
define( 'NONCE_KEY',        'sKoTN6K$hixM^>Hxs N_Xv)?x1<5qFTAxaSZ#2!,T`vzD97*b7#X9lONk|U[+f7Z' );
define( 'AUTH_SALT',        '[xX/<z_{/pCYT@^G[P.J7zAk2N]9a8!Bwqn/W~${53C][m,A)j*|iozWU6=xBy5;' );
define( 'SECURE_AUTH_SALT', '% GR/Xgkeq5C]4p!uL]i8|l;oBuh*G*YG$21Yhx2yeP~G*$E9-+bMU%;#>/KkX5]' );
define( 'LOGGED_IN_SALT',   'RS>$U.Z(+cVbHyE rGv[Kw]7C2sFsHxqx1*ejdy:(o[+#l+yLE4Xdz{Ia|ZTMblg' );
define( 'NONCE_SALT',       'Q@w%rCM9x75ifGHm:tUS67/U9G-Tycb}XJoDxKaCGKVZ+[Y{Rwz95?6]e#1ES!l0' );

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
