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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'j_e.=K;>o^Ix26*j,jp#>RU>Eia&y22Dz@VT32w-&J^K=2e #,AQmg77[e?^jJ#C' );
define( 'SECURE_AUTH_KEY',   '(-tO#bI@sT$eR*wkP}:pOsFaA+S(G :1*SRr:;+9U;ki( MhG,)z5&UG.vP+z`U5' );
define( 'LOGGED_IN_KEY',     '_.4u4)-2S_367M}!}Zu9Pt@XoeH).1/@/%J64ax?d;CFBXWc1bcxgO0*R:LDWuA#' );
define( 'NONCE_KEY',         'An6J|lV)^.n,,6=n@[UM27)Os.R>`F(c3K, xzk9CPBV{D=777Tl}09{v<tBd6W,' );
define( 'AUTH_SALT',         '_X/=Z8W{NRtRD4S8cBr9z/2Y+B;18W mE2~{Z0gAU<*(Pwg6.EUxoo-pae_0t[N2' );
define( 'SECURE_AUTH_SALT',  '-bWYlb ;6Wf;QrO-zz3P[9$aDNioK%.:irN^8TF*/E/>p_@, zj7&M(h-7VxekDn' );
define( 'LOGGED_IN_SALT',    'Vsp^(1ZIS)X~^x%.R+H^ZGU1({H4RTVWi|AI0T6}#BL=)jx1BeXihMOE&u)kch!K' );
define( 'NONCE_SALT',        'Pq(%szWQ&tt6HV&2bXomu!xezOM*JS=,yC#x^W^0B-O{vLCC(+Q :YYFeQB@<vYp' );
define( 'WP_CACHE_KEY_SALT', 'QMR@I/;pwvU.]MZW$kt^r}{L(me+0zKL^^DxG#Pu;4g)SrW[>X? 2[#$b}f|5cfy' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
