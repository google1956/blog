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
define( 'DB_NAME', 'wemaster_wp' );

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
define( 'AUTH_KEY',         '-J&uPs]5i2i4pD.+E6/m^s~)NBHQYnP`Xm`[3apL-xiH(o]C!J831.k#ZG#2P3uc' );
define( 'SECURE_AUTH_KEY',  'H?W{ueM1#vX{]@rzT,lk:m?GBc,h%Shv*r?cOn(0rCWf8{BuI%6-9YN2mYWr0ENq' );
define( 'LOGGED_IN_KEY',    '/HaES)h;~):*,f vo!lGlVwUWu}CW K~~r->J(X.a/$,LYR0x-&|5tTi}[m}O$[G' );
define( 'NONCE_KEY',        'at.5704pOV5Zz@ZRo1Z1fT5Ic#7nC.xNQ3qPiQ0W[D7[*gc2C26QEs(6L:AvP0R&' );
define( 'AUTH_SALT',        '?I(Pc<pHjp&O-&0mCo/+.jGCe*vjJ`N{R=hzPB<{5rKn,,f4RTG@=ft^cu-am~1%' );
define( 'SECURE_AUTH_SALT', '^O.%mW)aZMxv7(VUt<$|45Cl?XaW-v6K$kp|I*TFGPos30i^lZ?_)<SHI,f?:NiN' );
define( 'LOGGED_IN_SALT',   'O({V<f/9Wc#?x2=jHF^U5;S7pjYI.:6f?/}buH@HVnr[c4=LD{VniTV3-SAMA`XT' );
define( 'NONCE_SALT',       'PZKJGbf&6;a{b+_~| =8P+cV+Q^qTTMIT3iYc^2lTIR[j4mvXq+&@6IYPwrhz}W8' );

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
