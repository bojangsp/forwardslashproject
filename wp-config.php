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
define( 'DB_NAME', 'test_zadatak' );

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
define( 'AUTH_KEY',         '2g,<.<{hf> JdnJk7~dBNt%o3k,i#GY_Op[{Q9Mct,/$,%QA6)[>)h7)=+xuh~oK' );
define( 'SECURE_AUTH_KEY',  '!OraAuC$<rDZ+c;e&N)m%4jw}K^Ck|G3Vd:zh-&1%lHnIad^B^[Fu<ZwmzEQ;L@N' );
define( 'LOGGED_IN_KEY',    'vL>F0zb0c EcC@#&Ghs<d;J=ylDyc9C8TZ%aS![[D``=4@{~3jOSf]Gxp $m364L' );
define( 'NONCE_KEY',        '[Pld%62H_CqDgp?hsgM2*taen,M<h=#g=5Z/TR4uEK_7<C/Ys(~S3_SZ~gT`F_c@' );
define( 'AUTH_SALT',        't$&N!(&f*x,}`1C<9QeRcN@YXR?Jw`5&zM~x@pwL+B|3q iE,l/2<DnE3Nmw*39(' );
define( 'SECURE_AUTH_SALT', '/alYbc4d`8Dc.k}]X)ayoPCj]3NfL]c*L&V@uS!1g.hlSgX=Cp*fQ-:$EBvgUJfV' );
define( 'LOGGED_IN_SALT',   '%r_M#cL~IK|S=5PP=SqG:^E7-ZiTQ{anC+h*LJ+<F0^EeDKEn)9Z~URtICm{YO b' );
define( 'NONCE_SALT',       '-V//d|w5oaBOei:8z-O3@&4zu!Sn?^cd!33 7EfFjG#Q)O#}SA15Pyn2P 9[cgZ%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
