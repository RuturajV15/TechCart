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
define( 'DB_NAME', 'SecondWebSite' );

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
define( 'AUTH_KEY',         '%gPmyEje*-uNsBguDO6Zm3-A_B&Rq6Y#%WxM?yMe`bh?_gI^XFk),`fm)?_5jyPJ' );
define( 'SECURE_AUTH_KEY',  'g6G08!X0B]Lb_:-_)G.Q$/gzAwO]j  s,`P,FV)8ghi$JC6ABvIX~NKtdYT%;@s}' );
define( 'LOGGED_IN_KEY',    'Qp@Z^Ym $Z@].^3(l uUG)H/-H6bqPZR^okswC]ZYuT%>tF}S@2@<(Sbf,=Wtw2(' );
define( 'NONCE_KEY',        ')8A;X2g1y5(p1$RU!ib`<wtx;4-r61g)/ u0c|@`3%lOE=EYjlhQ>|8+hE,ul<;2' );
define( 'AUTH_SALT',        ';4Ec<]Fgyuq(1Z*89cY^a%,Wq*JG5_22Bh(Jug_%og8D.v43ppMthO&X>xOsp6s+' );
define( 'SECURE_AUTH_SALT', '-`BQF~$1~VhAav1!H![f^O+B0FVBXJ@;?z|^?UpxM14(xV{a,vy0VVCr4jfahR!}' );
define( 'LOGGED_IN_SALT',   '~xgKmaq]AR:wOTi_ruZE8Qb0D_(zaH(VZUjsSkrgwU^/CwzyO>qwR?0[*2{<rXnC' );
define( 'NONCE_SALT',       '*GAa_wF1=uukFDnG&VKO@<*$OY@tyj*uyB(V2MgwysS*A,u8_sA/HipY_D>5^G]N' );

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
