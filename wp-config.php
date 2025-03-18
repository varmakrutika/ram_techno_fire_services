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
define( 'DB_NAME', 'rtfs' );

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
define( 'AUTH_KEY',         'X.3hXAmHZ!`j@-,<8O,*e]<~U-0@!qZ>sqZq&xRL$zWAVyUi76CUB|wSTvyn;0H9' );
define( 'SECURE_AUTH_KEY',  'm00V$)bY;dxe&b<eRp%3_oWjRi9Mfq>gjekW2+WGwq3Vyh_|U]x?~T6Zg~X#2+lN' );
define( 'LOGGED_IN_KEY',    'J)[OOxRS!<4r~7a;Glf5lbx_#ZczIEP;A%kF7#yfJcw<svt2HdruusibB<nb?0fV' );
define( 'NONCE_KEY',        'EBXkpLHn9Va5OpcMQVpF2;S.@U0kl([~om3Fk_?f7Z5Kcg@v52$:[_*<HV~xMh#Y' );
define( 'AUTH_SALT',        'anTI]KMl6):e%oi(IBRO2be163W5[UPI.=<)5hI b#2I,Scz*+[HT&zlX%rq)2;5' );
define( 'SECURE_AUTH_SALT', 'kj#ts^VT|7cNt.8t$!(na[oa`ghN98,%pDTb<a?aDx)i%%0k6GJ:4XQ!N+^pP*z;' );
define( 'LOGGED_IN_SALT',   '~.^)RaH[90m@Aq4B8GfI?rDIlb/aJJ1ZjF!:}S8b0eTjj|XU-S2/18{4sc~h4Q84' );
define( 'NONCE_SALT',       'xY{:&2Xb&3D3, VI_:O+(Mjs7_uIVI_hvDR0CKrv{{=a|eGL@53hJ,c.Z>z+KI3C' );

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

@ini_set( 'upload_max_filesize' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
