<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/eyeasso1/public_html/seetheclarity/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', 'eyeasso1_eyeasso');
define('DB_NAME', 'eyeasso1_stc');

/** MySQL database username */
// define('DB_USER', 'eyeasso1_eyeasso');
define('DB_USER', 'eyeasso1_stc');

/** MySQL database password */
// define('DB_PASSWORD', 'Z%iMyFU?imF3');
define('DB_PASSWORD', 'W?6$#l0Cp-pM');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':%@[LL@&9C9BJ ^NPVZnDXjIjwOl;xye# Vd5$@-_,xY,u9$X4b<?17-3(-K-|{,');
define('SECURE_AUTH_KEY',  'B3dN2bV>B`oXwkX3fnM.NwI~1-5`$Rk(wD^y6Rjx  u1.x5j+:k0bvXTGha@ej|z');
define('LOGGED_IN_KEY',    'sx(p2)nc!t6y0U!B|>3.exo5en;QRzM5CR_a_%E/7S?Z`zkD{I3cf@|Iuu5#[3vA');
define('NONCE_KEY',        'k15Y&xUEMj]]sVU[O+[3a}-I]+PqaC;ccK{#^/6wS+(^rCBZ/Ffuy7%81]DY-10?');
define('AUTH_SALT',        'l3:CDk)PXz|y48|8#|L]neCE<6iUqc^!mM<;x{vQ/`bl%y/8/^Z4[HBxYcM159dw');
define('SECURE_AUTH_SALT', '>r2_s6!shk>me-Z+l/vnQ8ASmALK^_?Wt`wQN-g!@B2ZV*8_|mBUcc1-YVX%dDcP');
define('LOGGED_IN_SALT',   'mi}E7h@`jdArS,KVm-r }W&3&htN_<w|CI-!h1|g$R^D!VO<ha-I TN[sz8IUi_Y');
define('NONCE_SALT',       'Oa]y(;V}WA| p%tmAi{w%Ck~H!nODW/(%:p>MiXCawRwnyb5So[,$=S>F=vK?>JY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eyeasso_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define( 'WP_POST_REVISIONS', false );
/*
 * Use constants for general options to reduce database queries.
 */
// esc_url( home_url( '/' ) )
define('HOME_URL','http://www.seetheclarity.com');
// esc_attr( get_bloginfo( 'name', 'display' ) )
define('BLOG_NAME','Eye Associates');

// define("WP_CONTENT_URL", "http://static.seetheclarity.com");
// define("COOKIE_DOMAIN", "www.seetheclarity.com");

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
