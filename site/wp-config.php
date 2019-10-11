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
define( 'DB_NAME', 'wFlB20Zfk8' );

/** MySQL database username */
define( 'DB_USER', 'wFlB20Zfk8' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ok9CG3MUWO' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'q)7,~Wm[308u>. rP5ITXWF{%Wo:Pym+%Ld$jzEfkYd>@5ygP3!n 5WmK :_1cSS' );
define( 'SECURE_AUTH_KEY',  'k?-i%}7FPKY&U:TSB27w:a=N;>C]eh|bp/vy-mhgwpb(krmsA }T_5eqb5Zri{zf' );
define( 'LOGGED_IN_KEY',    '<<Y*2O*0QCxS,@k[jv?TMohGCbU_twNVQp8/IIP~Qm4Zg,TFBsBBnNBx.9Kaw/:K' );
define( 'NONCE_KEY',        'k#S<c[+93XdvH =_Ai[1UN!RmDg)Q^MTFRdawl|P2f$v|EBY{cni:0 #!pnE`O:h' );
define( 'AUTH_SALT',        '8&Z?,V#wGP-W^Gx:.O6cb~:Odq} Lu?KIj|h=66I@~;/8XBXa4p#]YDJCP)V#*)1' );
define( 'SECURE_AUTH_SALT', 'z8~e~?Z2zDJ* uY/~k>t6_te*Tz.xs?$i!KI320SXagdQmx^p<!O1&+gsZ)L{0A`' );
define( 'LOGGED_IN_SALT',   'SA0X<^&v)RFm&pbi$24<9v*a}5Srj5a7/G+z}$&N_zDUhKG_pN^:(D) B 0@@rq4' );
define( 'NONCE_SALT',       'sODEQbp:M}A7P|=azVy&%nbE4?:_A@^+O[AMF9@1}DDSzfrYTdf{ &deol-y.y(z' );

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
