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
define( 'DB_NAME', 'demo1' );

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
define( 'AUTH_KEY',         'HCvZ9iOVEp$Aa?*oKWe@Fv<twA+=CJ{8bZJFiTv1Lo*m(KG$]?Qo+}G55liva2o&' );
define( 'SECURE_AUTH_KEY',  'F1@zz#*>yV}WvK?<}9`qlDrbM3O9ZK4~$X&BBHYxgvAvmR=#rX[xL)j@Hw`<yLKn' );
define( 'LOGGED_IN_KEY',    'exg|#~OzK)4^7is]8|z3ha/FwPB11lUMYJFiH%MMPK8ODGR0(sC_K*:{3<4Wk6V;' );
define( 'NONCE_KEY',        '[#IYu(0.HH|J9_tj`FXsA&D8pHrSd78$-ZWc*D92Q#T;1Z(f*kbjqM^Jq8)vyXrV' );
define( 'AUTH_SALT',        '!]%4{(#[s`t>MJqky;G]4/r{MGg?=[<qVAF?Q2iG}$W>b}?ci3ju6ZlKyB$k1_LC' );
define( 'SECURE_AUTH_SALT', 'b?/&b5tmq%DubonC7s+Ie}6*Voz}lL40G5EzH[2d[=E{?IQiA[PJLBWjW3$O[Z0S' );
define( 'LOGGED_IN_SALT',   'Svj8L3aDaO5ga~h},&igXlvCAmlw?rBLnjmbnq(2)zh<836-YdQe<0J=U.wVQ!Y}' );
define( 'NONCE_SALT',       'D9cxSrG)m?h`L!Z%5Qy1Y,+sEUZS`D%)wGhS~|Oix!M^+}Fcjhzm3s!AkdC=uQ{@' );

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
