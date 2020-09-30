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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk12/3170048/www/biograph.dx.am/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '3170048_wpress61875afd' );

/** MySQL database username */
define( 'DB_USER', '3170048_wpress61875afd' );

/** MySQL database password */
define( 'DB_PASSWORD', '6mjHJshCkOXwYl4o0kje4yuAZ1d5w0Cf' );

/** MySQL hostname */
define( 'DB_HOST', 'fdb22.runhosting.com' );

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
define( 'AUTH_KEY',         'gbY3.>EFDU+L@:2da#HFZa1${XAT-a827V+c!P$Opc{S=UB8,hRK!si2$k)`#I~l' );
define( 'SECURE_AUTH_KEY',  'SxnR!~|Js}~U4S[aGGz<wTL7OrCi#.-W(rw=tE(6K_<FKg`A8E+V>q@J7lD3)s#@' );
define( 'LOGGED_IN_KEY',    '>*jJm`*ej{v8{5`LIPby`m%9?+^d{&PD}aZ9d~U!^$~dcEg>ppx:tT0[:HKCE3}>' );
define( 'NONCE_KEY',        'ezMs=!347~SRdb:F~Q#W%a7H[`{Iw7TbY#(,l9f3&GBX_QgdeGz/[L.M!]G#5`sg' );
define( 'AUTH_SALT',        '^|MwiJxx,0Shc^f!wWI>J1CQ$uFGJRe4 =q[ us{_mN@P+`48*XwZ[E8T}w!9;4!' );
define( 'SECURE_AUTH_SALT', '/^]px1,}~}%x+{[)TH9Z6yyUSe5D>wv|yRU@}BgRH83&Pva8Qk:F-cP?>bm9!/~k' );
define( 'LOGGED_IN_SALT',   'Avk<WR;BYhToX +-bd&| (6J`VSaq~PrT_;iMpXb-ndXe@l{[4R>c,qV2MSSN@n ' );
define( 'NONCE_SALT',       '3^^z&s7Q*ge,X4rveE=z?l6ZrXn~]J:@E`NKWl`D6A**:a^pOBdRFK<EC% .VskU' );

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
