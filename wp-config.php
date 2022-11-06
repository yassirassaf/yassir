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
define( 'DB_NAME', 'yassir' );

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
define( 'AUTH_KEY',         '?(]7RO(yh)%SaclG$h*(ljjDhKDrAC$Qav*(s=g:J.3mg;98S>>_w4mE6zlr69-j' );
define( 'SECURE_AUTH_KEY',  'cvJQ:`vSE$Tc!U-g[FhNAvd`zA}} v(coX?QU`J(=NuETbk0%l0_jKI9YLF1NCNj' );
define( 'LOGGED_IN_KEY',    '2x,=Q>W3[Ro.kh@7OLK#5[|wD}k.|3r)fH fWkIe_1~dc,Jbk$P*}R[PQ*h9UWLS' );
define( 'NONCE_KEY',        'B(z{`M/S|b7x/;6M-EeedS*^r[1whybqV{1gFNf6LQ|8hztu3v4$pLvj*{)[,P*C' );
define( 'AUTH_SALT',        ' )r~{xCe-kx){pO!2+Xf_z%PvA|7B&LHVFF1;V}v+QnGJ4?dDDu@gRB2Z9QM]*AB' );
define( 'SECURE_AUTH_SALT', 'cQ1fFl{TvrJFDJ_4foa]e7^m-Q9$PalER$(aipBN4KcTA $S]wGoX^m]!F66{x2#' );
define( 'LOGGED_IN_SALT',   'pX2$O)8Q|*X>84ojR2bQKgU+*jRvgz4-j)Y3rhUCf;g*l^|g<[V-PnC){9uv={Wg' );
define( 'NONCE_SALT',       '1hcR8)0}J% yX&!:(Q:$[IXKyC+X${Cg.8I;akUOkEC$bt|r=qcr=d0M,Ygbvc4w' );

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
