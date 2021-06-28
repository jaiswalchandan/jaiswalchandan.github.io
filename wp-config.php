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
define( 'DB_NAME', 'chandanjaiswal.me' );

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
define( 'AUTH_KEY',         'Z7t9a8h);eeD}n=X7+3j$@0x`oek6iyPUQJ7M=Ju*+!Rn@uar*<Rj<DE-gd#/^/:' );
define( 'SECURE_AUTH_KEY',  '^1(+}]e97^RzWd-Kpy?mO@:}Ge&909BD0&[GclKgE}~}Z8#E M+{:fF> [=l.Y@~' );
define( 'LOGGED_IN_KEY',    'n7/@X4[@!~#fjeo~8E wva8&fGe[B`{)Pu:IunAj[V}p>3! uP9A[kPx4Q;5G|PG' );
define( 'NONCE_KEY',        '`&ym wg[ItrLZye!Oz1r[b$xT($K:A-UD`KcazDy7NRB,8[V_HpR.;[SDya+$Uz)' );
define( 'AUTH_SALT',        '<xN5[DS z2zQ-]Yva@A(uleRHFrRlL1_LYeMWpi)nm5^/ 3`V;1B7^L,t$z;1*!B' );
define( 'SECURE_AUTH_SALT', 'Tdq5P,@sha(ZE@?.W/#P6?hIu_5_1%2n] g;Lx7O%i#+8BX&*NF5!=@U%DjGZtMj' );
define( 'LOGGED_IN_SALT',   'T*=G2`W[}6}>N9/.!TmX3W/7&6lXC p6fyG)h|y$,wpPv4P#5adKg *?8/I~}|RN' );
define( 'NONCE_SALT',       'DP%Db@+,5#Xid/6ITi_B}L,,g45U(P]5+(d}=,]f1gjUT<*2A`O*ub$[k.X$|#Bg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'chandanjaiswal_db_';

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
