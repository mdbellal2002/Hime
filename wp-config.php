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
define( 'DB_NAME', 'PROJECT_01' );

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
define( 'AUTH_KEY',         'ZNN{9z>nYzdw?3W{N4LJr!pyGgmLj_e$qOfzv!^m9R{r[d+fY.FueiZsvW%h!@p4' );
define( 'SECURE_AUTH_KEY',  'js$@ gT|i6uc!!Cf,5 @B/z~l]5oDPea9sCcU+%0mN1m{^]IMSsEx|0N>HbqS0=E' );
define( 'LOGGED_IN_KEY',    'HkWr?:)FQ[k((0IpiI>WhQ^z;5O~K 4b|GzGd+QD&Yz]q<w(m6>f70eiQk0Be%NB' );
define( 'NONCE_KEY',        ':1[Q|zK*Tj|<_^C_O-?JHaF^3z-3a+[3,T5U330_JNideDZ!!.5}_g{HI8y7`{/;' );
define( 'AUTH_SALT',        '40k<`KC/T?Dw4e-nLKsf$n!CoNp[^:XHi9]m#{ALwz.]7[NXqd9u@O8Yzl}^xJc$' );
define( 'SECURE_AUTH_SALT', '!wjq}-bPY$ncku.hjP>4Gf03Fm*R2Wu[Jt;!XLi94nU;qo`2LwV=,Xulu9jDvp~7' );
define( 'LOGGED_IN_SALT',   '*(E5mPvx><~v~iG?Qra=Z.Bms9yywF*+$B^E1.>/zqF{0xD_FUY43kUYb@9Ht]sA' );
define( 'NONCE_SALT',       'Ph&I`MO>2LI2vNaI*)@Rvi+r[:WWFTSCD~=fZ%Z4qW> rcM84*0a-D/I*#ir6&`)' );

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
