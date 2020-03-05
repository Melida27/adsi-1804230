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
define( 'DB_NAME', 'cms1804230' );

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
define( 'AUTH_KEY',         '#I;;Fv7Evyp&hw)]gJ-_dZ/9Wv+*]Q>3#dB1/ya}ydP`q0UN<FCR/M1P+|$4!/fG' );
define( 'SECURE_AUTH_KEY',  'Bu)U5]ZHb7OG~6MKTY^zIGwe= gaLf4s9NZ52?&O[r?E[kWG`^gsd> zQ#I,VHv-' );
define( 'LOGGED_IN_KEY',    'JgWp(Yc)(H?d0$esC;;^9;/c376Puz5J)6X+7ilode`UM93tC8:ec:Ttz/$YY,}-' );
define( 'NONCE_KEY',        'W531Ku=q;*eTB7(Ui,[;=z<B=NO#3j14<OQ2vGqqwJ.f>~Gc=k7^.w>Mck+?0uuB' );
define( 'AUTH_SALT',        '`D6r^os7=25Z#uiMBB:RfogE3 <`smEVMo;/tZ_%G`2tdv!8yt#WqRm`Lj.3K9~D' );
define( 'SECURE_AUTH_SALT', 'MYFKOP0~-B_G*r~{{xbYO|B#N-;`]z|=t+hJztci3xkn[BnlKD5/ nngDX6WZB2o' );
define( 'LOGGED_IN_SALT',   '#KDRyytQwhJXj<SdIKet!2:1}Q+d-/ODWkqggpmIIpmLav6|er1$*k)m#Rfuvj E' );
define( 'NONCE_SALT',       'CF;=, ~U48843)Mk|19p?RZ]zazV.`9t*2EL8$Pn~}]1D3Og?)# 6rz,p 2Fi|,:' );

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
