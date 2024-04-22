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
define( 'DB_NAME', 'keobongda247' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'AcPaA)z]hi}T Yg5:g+-OMN96!QIud4d^nI!tPNcyWXy;]+Ax--~b ac)E*_%$vl' );
define( 'SECURE_AUTH_KEY',  'R^bSzdE+$PP@WTb$+:Q(V&A WxD;C~WAbZ `A<4Ntc`RM7?&38;U<TL0T2-ymh5?' );
define( 'LOGGED_IN_KEY',    's!:W{|[$@idb!J*J}J@?`mC1Se9/ni=kT}RV-G=?>+7[z8TmXZYFG(=iq2j=B@16' );
define( 'NONCE_KEY',        'W3wSb0C$,wtx*NdR@777,j)m4[`u&b=Pih*<Hl%DF<!YXwI6s#{T56<jzUWPv=X@' );
define( 'AUTH_SALT',        'o4njA}oCu:IKFTw!ZU^is7dt<| Az_Je0nY)h)0dKF:Br[wCp%k7Od Ooxc@|1DU' );
define( 'SECURE_AUTH_SALT', 'I]Pqhsz<whwPn%TVxtd]#`Y|7@h,ja:5vO>@21e=]?gxUI#.Z6qSW.j!hCZXaQkD' );
define( 'LOGGED_IN_SALT',   'Y~{w98!/~:f2M`}x#r;@y_6x%JoZOz$+LCl)Ge9J6Yc)ZtY1A/t~~c/BijEUTdL3' );
define( 'NONCE_SALT',       '!]O5w(eBH{oHU~77uA5 5Fc&Ap#Ydm%/$i-w5*@LCmz>g1CQ[W:49Z^dYn.7On*E' );

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
