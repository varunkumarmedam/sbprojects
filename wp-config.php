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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ZF/9qQ:(Cw~n.Et$iQC&QHq4z3shn4%%{^t;7w{&!kM$>+;iifZZlLbKrh@YzA<{' );
define( 'SECURE_AUTH_KEY',  'Y#L=U6k|RM0%Xi4)jOxAYV]H+J+Y|]~.A<0)Q?[>048J,FmsAyVP[,)IM|i0(QvZ' );
define( 'LOGGED_IN_KEY',    ')H{sc90TU)I~Kzss]AK[-C!.1f8;)n/xw%9hR,-iPIF[:#0$w&g0]PjPSScAH;8z' );
define( 'NONCE_KEY',        'WW;2W2c(Thzb}=554Sib1q^UIys pZF6|?UTUy-a}E?nm1,=[,:!Y~_Hxf?_!i:2' );
define( 'AUTH_SALT',        'J8b5u95g#YypB<y&k82qwdE:G9U}^eKD?4&$U]SKDZGBaqeTIF}qen=8R4j]3N[#' );
define( 'SECURE_AUTH_SALT', 'i*qCXt/qL~GQoSC&eSMptky%Z]-0cF {>Wd]wylM<3GcJ1*a4ohR7,Yh?T3%[^rn' );
define( 'LOGGED_IN_SALT',   ')@VRd,n/-rFcj5[zj)*B<m{p2`_i7BqgUX$7S=j$7X2nbHYqX`X;nUQHAv8IpYlB' );
define( 'NONCE_SALT',       'L.Dvj=q5W9jBB&H?}w>h]@yjj0Pta39B|*eH@0!<ZfofS4OH*+a$=rOYzK!6FbD0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pre';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
