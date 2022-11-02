<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'DfqEFn5YApGgZ7' );

/** MySQL database username */
define( 'DB_USER', 'DfqEFn5YApGgZ7' );

/** MySQL database password */
define( 'DB_PASSWORD', '29BR2OUHeEkz4D' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'rS?RRw%T>w18cPU;,+E3Z[^6C-ID<0*9f2a=O;us0{^WI^Q!M&T9w!]TurxaGWR;' );
define( 'SECURE_AUTH_KEY',   '3&r|1wgNIkI&,H|?f;=G/!k|IP.N_^rr+xkj3Th<jJ}uv~[MV1$~7yeGmL9[i}h{' );
define( 'LOGGED_IN_KEY',     'F=kL&m}-nE3)e6g_-G|M^`XxOkBB.v3uS7u]VWz<0 vS@aDoy1K<T>1S<$6d$Y=h' );
define( 'NONCE_KEY',         'v9,~r{c;dEFX{XQ.iY|~z-AFuM1u&~@1qy?hM|osbD,DV1S$|oR[zEaJ|5%|?YzI' );
define( 'AUTH_SALT',         '<&eDrJ&j:b,2g4-e;2cSaaaX)Gb*ep:AfA]kh.sk8nO`kURW]o3<O#]z<6TTnp5a' );
define( 'SECURE_AUTH_SALT',  '|;ryZpz7|Cdo8.@di fsK$j=N6gGZ!B}m+ydY4Cb8#Y7%:#%500}yi<xhuBQi9<|' );
define( 'LOGGED_IN_SALT',    '?z1)[4o9[owlDOP|yPC.H+:m/XRCB7P(ILJET]Hi LwP]nxb-LL4;_I$jLYZ}q8-' );
define( 'NONCE_SALT',        ',zUGr4_=DaYGaXV7x;p!A+.x@J%sxXB-?;v}^7@[U%6{CI7bGJ`Je@V[d&X/s>_d' );
define( 'WP_CACHE_KEY_SALT', 'oBJ5?U0DoFy5f$q/DJ{QEUWNUs>gSOVc?}|8{<en9~yk(>F!&F!Mj#OMFo^P;TB#' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
