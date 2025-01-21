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
define( 'DB_NAME', 'lms' );

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
define( 'AUTH_KEY',         ' 3Es=rX]PLz|g=*o^a=@T99u0Ck,9eA   ~JUdhnN1eh7)Xa/ cCe$@zR,*()_/-' );
define( 'SECURE_AUTH_KEY',  'v$DA1sE5-^Yr.mUAq%7wP6Mcyo/h{i~ZfPj7B^^g2]*e1<yx/F=FqlGn7b{+`:X;' );
define( 'LOGGED_IN_KEY',    ' b*ANo-_@{y=(5xToh5XRVt&Q8_E*=b<gww,XD_h-mTm.vUV8Xd4M(^.m2}/>1/h' );
define( 'NONCE_KEY',        '6&O+Iz{dc`a[+9rcur$#`|r+:O5W?J- D N#HEa+9C+l1^pJfHkOso567pnk:s1X' );
define( 'AUTH_SALT',        'v)E~t)B1.5Nk!NK7~1J27ws9Wf,AL_3G|x^Z^,pq 7e<P<,XTuTK[I5A~<boYcLM' );
define( 'SECURE_AUTH_SALT', 'HO~2FVm]P 1ra|Sl[qGuLPuC2??f|8:12_MEsSkSm.xEx:@v^O5Dn:$vqU1lpx17' );
define( 'LOGGED_IN_SALT',   'wa.}7(aj%(bEZ>.B=2%)$LOb8)q.qa8Ym?2+!Aun6hmLlm&|28Wr.aUa- 5-lsbl' );
define( 'NONCE_SALT',       'B65<NeT|tl_f[JMS^2y>;wWa`+f;f<dDD!d>K8B9ymJ16gxXW_5u.S_5Zdp:!KAx' );

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
