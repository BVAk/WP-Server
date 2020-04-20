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
define( 'DB_NAME', 'backend' );

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
define( 'AUTH_KEY',         '`Av*Cibq/KM 1qE~4T(?Zu8rYT9qZ.9_EiHp&0`F5I$%dlA^GKaa{@M[E%eX-D7z' );
define( 'SECURE_AUTH_KEY',  '5}+@+.O0o?%8!!9|ZF0ev=+`SxuKe[KS@(@Q>qr61n(Ymb]&j7[Yl)Jib*XwlDYO' );
define( 'LOGGED_IN_KEY',    '.0`@xbD=#SK]HH02#r]{uG41_@^t<zBA`oB!4p!X <5>,cdfL;5jjQVE7[Sxe5W`' );
define( 'NONCE_KEY',        'zq<y&Vv#*VYQL.{I`i?R#7TP860pE-(@uKG`eXNR1}7oyiNu~9?vr)3b;vMSv><P' );
define( 'AUTH_SALT',        'Zm$}}g+Zz{7&2ya!QPxkS{15)WYXmdnnL>!0/5$no9~KdpjUlI<o_]o(^2w{+ciN' );
define( 'SECURE_AUTH_SALT', '!2jyNv7Af}R`]4%Cob&$|$,S@%y/=?#z-3qdS!=iLJg[TG9/}c?$mu,%@dehzWSJ' );
define( 'LOGGED_IN_SALT',   'l6tzHw@H3u^-u]Y%:qs1^-yW^D%0J/A:aqNwkeZWZ!o+YA$zls-ZaB.c[2U#>VwE' );
define( 'NONCE_SALT',       ';U@F2e2aM]cI66^yt 2CcsOzC0We!wSGK5vA:r(]`b$Pw77qhS-;w2v9IPiZ[aog' );

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
