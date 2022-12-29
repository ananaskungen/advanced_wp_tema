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
define( 'DB_NAME', 'digitest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'dGj+G2-GY1_?,$i]>=ecZ7xP;QaYZ3OFA;j`m0~;r_bI##}TTJm@WnF==8r+I Ux' );
define( 'SECURE_AUTH_KEY',  '+3aG)@XZ |_MDhsWmLmGLwm=yYB?WjyNs[EXg$[nsg?}M^#m<NpRG4WzX~bXWJdS' );
define( 'LOGGED_IN_KEY',    '3jcHq%[7Nv1bm&q},3%RV/ad$Id+:]^Z]O6,7W8X1n*n3nm>#5GBMbALr3n65aD]' );
define( 'NONCE_KEY',        'J(bBHo2*Rg?8q%/)pf7[l)-~;Al=(Nfs&ek0^`0[=j@5~+OE|JB)PreB1nA+Wr`@' );
define( 'AUTH_SALT',        'j7KYEfa&FC)jZC?51^Jb>F]|0l|Ka@z{~:[0|yM1%)s]LdNn#34}oicU9.Pw)9[0' );
define( 'SECURE_AUTH_SALT', ']Q>o;XVV*cUE/t*Nd.R92[gxQ-!cFo/9wmp,_RI2#,j/lMUNdQ?2Sg@D>:,$U]6]' );
define( 'LOGGED_IN_SALT',   '`5ny?zxr2x-SX{ -%G/z!^dN!@Yz{yivR!AW^)e^4)40CuW9/xOl.>s,U#Bfe_}z' );
define( 'NONCE_SALT',       'p^JIx.ey.L1dbXQSk_=v(4#k7#s86QZh0*=v.MUP- d>bYkyyB9%`r#+D<J`XR7-' );

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
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
