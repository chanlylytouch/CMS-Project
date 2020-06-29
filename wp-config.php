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
define( 'DB_NAME', 'cms_project' );

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
define( 'AUTH_KEY',         '776S?[/g^DFU-BU+S+jF(RzxE[+xPxTO]BFW.c8 $Mi,0I(rD$[B,U%}ok{R5Wj!' );
define( 'SECURE_AUTH_KEY',  '[N4S&[~z*O+Nl3_tmwHc[D_C$T]P>t.^L9GzmJ@P<apTA/y_:IK!<7st`sp07w&W' );
define( 'LOGGED_IN_KEY',    'Pd.XxoEHF6;Z^,>0de-&1mH=) A$$bas/P7&C4n5&.IE%nDOo 7#J[m7=eZDx<ie' );
define( 'NONCE_KEY',        '1FUV&2<D>ikw3=KK;m1;xO0b{?~{;). |H^~GM>1?k/8[8*{;3@_3v(0[C4me(fX' );
define( 'AUTH_SALT',        'S@pa]8OA!?ESXICqP]zn ZPg)5e(|YP$6$~{krqf]se`0mw&g9)Plk0&OGD;!tXb' );
define( 'SECURE_AUTH_SALT', '.TJxt( i_QxAl/3QB0!Y@L19_l!k;6_B!A0jNCeZjB]n0o@nabo2 aNK$Zt=tb{j' );
define( 'LOGGED_IN_SALT',   't0*Y$JT)bHvg-;&_(C`Q_?FDh5SQJS8`Sky9X*Gu`=k>3uD>>1Mhs|e;xoqn-1{K' );
define( 'NONCE_SALT',       'ToWJ]s[NkRib{4R$XmsO)hs^#^.cF:CFo#a|Z/|,(H}#`qFH <|%DN@c>ppDt1p,' );

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
