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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'w*/J]BTWDU4MR*CZ^qP6vV5nwvRo@>p,5?Bq|8km2E/@tqI~Kp;1% 56R?S1{e0l' );
define( 'SECURE_AUTH_KEY',  '}:w#yNXV %q@) 5 .xUH:4LY(H~U&L U-_Evb`YnNVJbHfnn$X)9_BSSl;:ItT[Z' );
define( 'LOGGED_IN_KEY',    'UaLt}Q{Ss(9OTKl4A.$[d^{inKb9`?B|<,L$>kcl2S0]`1G9OlT1y3c_gwN,_m_s' );
define( 'NONCE_KEY',        ',%E#E^fqS~aKI:>Mb+gg[GZP!+GKk+ZdAI^B^?yq.n.E4Ppb[YH*rzqJZRl2xh(H' );
define( 'AUTH_SALT',        '(KK~@$p3~gJRF#y)bE L{E)Ud9dK)$f^Q_*G,BX$k,JWd`}!K1W>*OKV#)aFM*h`' );
define( 'SECURE_AUTH_SALT', '-OKH!&cU@!_;rmVdM$!&?m$HodI&f4Y,rSY5{<iwo~IO4siusgmw%=^AxRD/+,Xh' );
define( 'LOGGED_IN_SALT',   'BdKPa;@YW<*pOP-5z06d,6(H_l@#;L ~f9zoS1/ah09Pq|>Y2g+94Y/o  {@+u.C' );
define( 'NONCE_SALT',       '2T|lyy>*s,>;NAyO@`JY]cHCsvmA4&omS.TOmVj_BB/E6=1$[NzG={ &VHNe;FUw' );

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

/**para trabajar sin ftp */
define ('FS_METHOD','direct');