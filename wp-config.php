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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'T7Osl*mWLE+Gv!f)(AR{p:FO[B}a;3W#AX($I|Te{@+ R~?7XdcO2&$iY1^v!UJD' );
define( 'SECURE_AUTH_KEY',  'ZKB|V6Sw[h}+]@#R-Z(!Lq{=zx9Kq{5VaB*&gvp/e1m9Yi<Fg*1{ Vi~u}mpyzt|' );
define( 'LOGGED_IN_KEY',    'S:b}Ia. 7-apGZ&-BPSOOjMIhh$sFer}hS4EZ$U*tBox-`xli%*aV;;_H{Ye3w+-' );
define( 'NONCE_KEY',        ';v!X]aaAS*THYV_@;8-Aa`aqgQ)atq8Tbh|=0gC2~Cd)W$[=MWY7Z([tH973_[;@' );
define( 'AUTH_SALT',        'U:*Lg*F3cs!j}<>^mTUuu9lIFqwlL)_D^_VmC80i;EeqEtFY_97FfmM=J.[w|o}`' );
define( 'SECURE_AUTH_SALT', '3O_VMj;$GDDn!-p| myN[8u,!E?b*95k :O3qN>9[`v<[]YZv=h@;!]JM7WR@&ND' );
define( 'LOGGED_IN_SALT',   'Vs-^{QnJ?BwnfE0Z]~U}%xW.V8b(P?Sq~=@0}*lXjVEhqk)GnCL.`C7O0l-ccf*l' );
define( 'NONCE_SALT',       'cu5-OR[%9ZVZmAVWUhFK;k5r{@<n}}SMh)OHlfVm07|oc#`>ymbfHkBGb:a.V:se' );

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
