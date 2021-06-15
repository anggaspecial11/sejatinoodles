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
define( 'DB_NAME', 'fe_sejatinoodles' );

/** MySQL database username */
define( 'DB_USER', 'fe_website' );

/** MySQL database password */
define( 'DB_PASSWORD', 'f3Web12uP71' );

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
define( 'AUTH_KEY',         'oibwk*u2lZi8>8 _C[KGu7Qd^cON|>{Pqj?8;<4AoqrIH}PwNrBb26,~cQ[;b?tm' );
define( 'SECURE_AUTH_KEY',  'L5vu2#7>7#8KKeZr?5@cXE~wo<<0M]?J,2NS/P1P2#2Zm7er;DI9uO+YQA_(LV=s' );
define( 'LOGGED_IN_KEY',    '!z9M*r7%Q>cm>oB J.,;y!}@`Z>N?_s7k? Jwt[Y9MT<2keB0{R(ub!g[1m-$Np&' );
define( 'NONCE_KEY',        '8wkd:kAsKNiij0SYG@b!WphFE((xd}yp59mhZ5Hzja?G|x{Sn_}_zh4Y=Sr5:8^H' );
define( 'AUTH_SALT',        '97>+/Y;</J6@!yvZgN.&C|rX;ZnQqcTX)^g<e|)xjgSSOsf6S3@*+x4!#~>zEiaN' );
define( 'SECURE_AUTH_SALT', 'o*TuYv*fuYWNa3CRX`obM}GSvf.~db{%]H.CGiO8`c;!7]PpZKb&*=~:er{];,<D' );
define( 'LOGGED_IN_SALT',   'lk0x.,2GZ?C5S}<S+r]3tTx3DGmyuV^/ZM 33b4n:R!0x) b7n};r%rU2b@A7S m' );
define( 'NONCE_SALT',       'A:udC&1oxCNU;[:H.qiO+!79J[L5nxJ3eO:6KK5~s:+-a@7 ?V5:UP)Bkax2l]/D' );

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
