<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'new_labyrinthinc_com' );

/** MySQL database username */
define( 'DB_USER', 'newlabyrinthincc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vicnBzNj?H-3DJ38' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.1.9' );
//define( 'DB_HOST', 'mysql.labyrinthinc.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'wxaAM/+y#8pgh?Oj *$GF-}GXuxq(70%q/wub6mI(CB e<e+6-#.,XX?[1:#@:#3' );
define( 'SECURE_AUTH_KEY',   'Fwga3 8+^r&XP-rqnX;9^7B<vj3x&yd1&BQ9/@D6ha L9RNMpd]AkRDVcU%ZEj?D' );
define( 'LOGGED_IN_KEY',     '=2h,vmFYi}t[4-92-oGmB-ivO&sIp=Q;^5r<1R9(|~iw+?CX3A^`[mMTM/[0XJyj' );
define( 'NONCE_KEY',         'W(!Hm]!wwbtj*?q;_cR]DGt_a(m8OXWHjBWvd3EQ*<rpMT}K]IU`t3p]f;|>$V)v' );
define( 'AUTH_SALT',         'dj.wH}3[Ss=/2tm}bj@%;ijp&Qz97f9*3!1u/#-5Sb%=6)AG_B$v1!Suad}.<v&J' );
define( 'SECURE_AUTH_SALT',  'H#4d0F:C{$a-BCSj_3k:!srm`o,4zX6,.dY*my~tmiGjqSPS}clc-)q?b6R,82~.' );
define( 'LOGGED_IN_SALT',    'okcHt|$:g$9fDn#0QK5@q<<MKq,Ad=na[*A#7&vA{6W7J55p}q5|cR3BP]%[FmZn' );
define( 'NONCE_SALT',        '09c)eChrN*hUPAf|^)7YS?{CUnT|+%Vr(Qf*.|uw$6sC`.(SjC]|3#e$:v|vAKOL' );
define( 'WP_CACHE_KEY_SALT', 'C]TPN%tIow5{4-)2f3a]gK_Exa~|*tB#Ot*Y?.p/q|s/@Mp&x(!fuz@#NH1LgM5T' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_fzu7zs_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
