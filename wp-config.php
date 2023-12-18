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
define( 'DB_NAME', 'maleeFashion' );

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
define( 'AUTH_KEY',         ')NId(8q8! *qnc>&^CC26/bO- O_LTH=jG+oR;,G=Ml*n}$rGk|s$LiW=Nx6&?tY' );
define( 'SECURE_AUTH_KEY',  '0nv/bez[AY[bQRCwVqOe]jT])!l,).NQ0wS%h |J-5$H[eHJ-_.MHG4U*KVdus$o' );
define( 'LOGGED_IN_KEY',    'xmnX QO[;w>~Z3dNn H^}_K|xX7;^B_5x8A*Xh;zMPUyE;MquMS,*`}XVn=/!sXW' );
define( 'NONCE_KEY',        'a;m,B,cb[;Y#*!C9Jl>XR!VTqCSN,1wJ8xNjM1{Zso=XP+j2uXom$-v-,%RZ`*!a' );
define( 'AUTH_SALT',        'xBfc11G=:SNV4I?}CWI; Y~8ix>sQ.[pn+.ir[<8,]HTZ*p%I53sG;GBokzmr1*j' );
define( 'SECURE_AUTH_SALT', '93jm5x9uofYAY!Ak6@.x,H|/O}5e-YQRU=$Y~KJ%`btK+M>];CD1ue8!{zbMEWdM' );
define( 'LOGGED_IN_SALT',   'b=^iCzsFJuKVtOSeq7:n_I~%v/#Jgu0|*N ELd@CtEn-C<PN,]O0wy0[)joK8n:#' );
define( 'NONCE_SALT',       '%Cv[ !H`kfL_Eq-|gEdLS;#Uj,2JEs0.|DnWf0I+uWL[p_6G7wkB53PL9o*bR<]r' );

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
