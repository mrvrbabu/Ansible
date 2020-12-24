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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rootdbuser' );

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
define( 'AUTH_KEY',         'm?>_9xnGA2!_n/.zYU?juM?VWgGb;mS*%2}k|%9Q$Wwtw)J2.f?iJp)7~aa%mXVk' );
define( 'SECURE_AUTH_KEY',  '-Xb]@|V5>_dtOi[v-0_b4=eLP[W4=k.ka9Pn)x`uL#mcwEPI.Q6@w_h[r)P3N._X' );
define( 'LOGGED_IN_KEY',    '!hRa1rw]GEzVf{_0)HNI.2z;zl@-/Az:R]%5v+h/Bo(rP~Jz OpjfWYDB+X$Pm3D' );
define( 'NONCE_KEY',        'zSc&zabYBwvQ{d3j2L70gVaGEx@ROm/SXH~OECuO)+UkV`GN)tZfwP1IGS6T<>z3' );
define( 'AUTH_SALT',        'n/R)>j@.8}[Ggn@ CEfGwyI$yX&F^gMe1-Q`Rmaj=8S!nUg%R@ZB&TPq8S3qSz-l' );
define( 'SECURE_AUTH_SALT', 'D3Bujvz#5d1wl=PGLlwRvv}S2fJMpP+,SApqgpf>d,yu4<Uq;nN(R!wzSRSRn|3/' );
define( 'LOGGED_IN_SALT',   '8`P/f#{qx)/e&:0)Oc#c`kgc[t.hOcIae*F5!J3tlh=~>oO5:fou,}QG/0}AuUXS' );
define( 'NONCE_SALT',       '&8&9G`7g_5r]@r>a<ybM1b{:M,9IZE$I;#AOj9->5?jbwk!EZz;~$+(lNl*4d7:e' );

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
