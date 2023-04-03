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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db-start' );

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
define( 'AUTH_KEY',         'q=d*`-F;spB*V9!,-4L~{a#Rq*bre<I]QV{_Fm=.#!rh=~@5k8#.PidQKY`92wZF' );
define( 'SECURE_AUTH_KEY',  'pFwt0/&[1vNzR7u5wy9%;bG^b)kJ<~osZG|KuY!F#Elv9,||$n}#XO6%CAnk5yLt' );
define( 'LOGGED_IN_KEY',    'i2NlJYU;m2@PQlecea+&t~%dUV(&1L`6zzX1W4H0zj1=GLr5so9G,)LpM]Ds?eB6' );
define( 'NONCE_KEY',        't),^}%*IE5ZO[D@hF$qE>HzM6h-@N=$v+rh[AM~]AvqgL%+w[?{hjq;KizP&m<?K' );
define( 'AUTH_SALT',        'P! xY2V;:7<0dMtClxM%yE3{`9:lqq]paU32rq2uE/=i_T^G!SyH7<[pfY8Np#]w' );
define( 'SECURE_AUTH_SALT', '0s[&P5(D#b}]y_@?**|gz,.T.-zW!E1Q4NS8%U*wDhgL8?c{>MNBz[yUxZRKxF*#' );
define( 'LOGGED_IN_SALT',   'W=TGC:HRD9Cnk/]O0bCQ1pmi6t^(<wQbJE0]WGM#mkcy4;$NzQ^)qIqv:drZ3u4Q' );
define( 'NONCE_SALT',       'z92.v~MCI+|J%)0kd:)wQQbZnGbrf*z)i)7QnJ<&I=5iwcqR{0 fiY`,06gcI;ZP' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
