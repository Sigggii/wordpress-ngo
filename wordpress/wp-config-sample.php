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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'e1nfM23q?j:aOU*s|E!EE8y)0v)lQ7gLPr;#WXf>?vXlg$;)iobVY@rdf^S|9>pZ' );
define( 'SECURE_AUTH_KEY',  '&Px.OZvN5n79#BUkYU2J(R;US50vlW7@@/ #F%9zUEp1IA1]D}QflRg {!xKVTu{' );
define( 'LOGGED_IN_KEY',    'S,}^/p|YOr-ya5So{%HjdOW6j(|6@=9;+0GK=EB*>#St!*$tqksG!$El#G&bEAQj' );
define( 'NONCE_KEY',        '>gzUH|Z`Q4,3bQj;ryXeS,64~;WGt+=BO4f_i 5?t4_j2 j~,]tV:_W(KY2GOTZH' );
define( 'AUTH_SALT',        '[Ir8IK#.,yhimV=lbO|[uk[Rx=E|~5~/}1o}#aK{5UXXTsIH/t~kRi*&NakA {1U' );
define( 'SECURE_AUTH_SALT', 'W$ZloQ9~2pS];N7-w:cpFlFEjX T-o^cxs_+2x~N<[>}~ [a>,Xx`Nbq9V[#>z@&' );
define( 'LOGGED_IN_SALT',   '==,g9:FfW:y8r5j4MO>2}a,5(Er/8+gS_;u-6UJTPb{Oitiqm/XAjzGoEfD!zzJ`' );
define( 'NONCE_SALT',       '_|Q_Kob5vid<9.m!@9NN>pE`zaWwGnw=$`fG|A;v4TR2L/IGS}5l$bxDt%Abn~$s' );

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
