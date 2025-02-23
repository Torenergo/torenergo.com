<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         'FTj9P4MD,vv O9m.(;VZ3|T2KJyc&hfON:uQe,4}:Aca4)9|< bh(*p5*qk%=2Ju' );
define( 'SECURE_AUTH_KEY',  'HS;4[cW3iw*.^G .[NJcU@i~tT=k0QP9t?qpAN{^.HK]T{JkQI_rlb^qn>{{o#^7' );
define( 'LOGGED_IN_KEY',    '0z&iUau_|ynHgiN#071CPWo5SW8qP53x^J4wc7? KY,M0|gk/4[;f-L0rZtm)e[i' );
define( 'NONCE_KEY',        'V:bMemSQI*@4&;J6cOf?ZPj_bZ;Cc{,anl{jAEnULL Xt<l|p{N1/;0HG>%4cS22' );
define( 'AUTH_SALT',        'g`!yq<HGsY=C!!tpud0xiEnjGFDp3kXNYlw9UrD#eKG=T73C,m9Wo @73[;Jttq%' );
define( 'SECURE_AUTH_SALT', '*|=7C/wd7[&T&t5nRP#-h:^d|5t62=dF-ty+H9G>DAYk/46kNz.E_:9`*oV$5wQN' );
define( 'LOGGED_IN_SALT',   'gAg}J[~dqmk$}w3zXH6.UW?jC)_7r58?w}U{ULGTQ2fK39@*BLv}6;Nb8N24%]u9' );
define( 'NONCE_SALT',       '07cG$HU.)=Q5uj,R8P+a!iUL6m^_<{/`D;5/Vm!oKQP~f,1`f<GH/[j![E39_h+`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
