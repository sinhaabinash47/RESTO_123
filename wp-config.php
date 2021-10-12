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
define( 'DB_NAME', 'minorproject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'VJm5qx2W7ru6B0ZmuBTV^<3EpN95~9kGm(d<p[IbyS`lq>cuN?vxhDE tma -QaB' );
define( 'SECURE_AUTH_KEY',  'OTMpuo|4^UkpKr8WW{mRry]h`SJ`I<?=aGfkGG-8&c8Z8yVvT #jPF:P;9)m0eRm' );
define( 'LOGGED_IN_KEY',    '9fyMLgd)eP&8pa%}XYGq %d90TC.@D+A3|L5)L7j9;T#RfF=L`p@r~VNeqjw)~>M' );
define( 'NONCE_KEY',        'S6uiQWs;q|+K*0=%PfA4<y[~DyPb%jB_6fkOQG$1-@pM42y#={))Mpb9sUx(puOc' );
define( 'AUTH_SALT',        '=yYh9^cyh7iQ?]y!p=EB)ZEH]`et;BZkia:mwuI%JzX{3EU7>3J8gSk;Avz*A,qN' );
define( 'SECURE_AUTH_SALT', 'Q^$9N_&})mA`foSo$mxMDc2w2-lbSmzL9d`;u2g?[T[1^8Js<B:d_V6f_XuIW5hV' );
define( 'LOGGED_IN_SALT',   ';ptJ,z``,-^:i-&JFW`,U`h2B4$]gvYBkk>N{ G-.QH/%u7zcD.x$eM>0eNSaAB.' );
define( 'NONCE_SALT',       'pif1br;]BV 6,Zm/%,IfG~SR7C.$Wv[:*B|-<Xb1@cg/w?!qEdsWd%ZF;mGV9S&l' );

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
