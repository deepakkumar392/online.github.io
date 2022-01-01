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
define( 'DB_NAME', 'infinty_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'a<&A.DXg;??XSrfH/g{RVZ~92};1G9&?)R]jDaZ{k>eUL@C.y!&<(Ie8XiqGGfNi' );
define( 'SECURE_AUTH_KEY',  'd6F:-2Hka:wPm[Kc/S*_h$#~ls.f=e%u<6J@VDxwyWbF8y{Z33LSfb88yaV.+f|O' );
define( 'LOGGED_IN_KEY',    'E$B&8Txxtg<eih(SLSi_XE(C,1+gvQr5%EbJl^/!(7xS9j#N.@x[O[1i*x;`=@i-' );
define( 'NONCE_KEY',        ',/N&^}F`[@ _U[M#=`5e/2,?c5<wY+Xe)5;wABJ(3mYJ>XPd8ZJ^fE?lvNM@1_b3' );
define( 'AUTH_SALT',        ']9:}HxH]*7b!L-Qm PwCp;_}wT>yLW4I%qV-9E5|BcxSOeZxNJq.q[t_t*$ c1ut' );
define( 'SECURE_AUTH_SALT', 'o-()PBDS}5gNx7DqVtY,&<SNvs(K-/YZy!ZnThkPWcHZci5^ubkDyCQ,9N-/8cYl' );
define( 'LOGGED_IN_SALT',   'Ia!Cp 60biR0Bpa/h^?VD.quA/_2$ri-La;*aNA0F`V@Y{mUQaoR]::0c6KsVBZS' );
define( 'NONCE_SALT',       ']i TQlmUmL2r}{CNfl!..J&lc2ZxHuJH)S(Il.joj<>9QycM~ih 7&XXK=uJAb=h' );

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
