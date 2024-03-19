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
define( 'DB_NAME', 'mota' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'oERx<-u~f+eApTE?{UlL!bm?&}c(6wcQv@XUDdoYfZ@9*>]UAUYC35(2<g!j`PK@' );
define( 'SECURE_AUTH_KEY',  '36aOy6D-gpD9:vGOma?&oiCk{D]v*-Z:8VBbG@?j]ntmO3Vt?!*trLk)Il]tx=9G' );
define( 'LOGGED_IN_KEY',    'A68UcO!:(Ykltcxy<Zu7z KvO(tdR/hxS3[7{R/365m)h}*L,OZAYG^eDOlafn_2' );
define( 'NONCE_KEY',        '!4.JBz)I~7eJI8)PyHkUCVGhFz@`_X~9E3J.[oF NzPeHWf]MjM.y2eR.QE+=&cg' );
define( 'AUTH_SALT',        'yA%9u! ~O^Dff/2!`lxf+aU7:NX1;0svO]uAI0~m1)!z6B&<8.()*M4Qc9}/eR@e' );
define( 'SECURE_AUTH_SALT', '#FK~.]%5x.AdNy#sl?z_{?(xZ5$:iq9)qKlv29/v^=;O,d)2.JdRGv&?jdI$9NW`' );
define( 'LOGGED_IN_SALT',   '5VdnSjD4b^|Sn-tY{dLw_[TstH`hAa+53jlh%MR>$jj6K/.$5%>W&vbOez<7Ez?K' );
define( 'NONCE_SALT',       ']R|xT6b}9ZDC;2;~n*Lyvj3kl.gN[wQGoWg*617f!h~V*m.d~_Yy]2[e,3]K]mph' );

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
