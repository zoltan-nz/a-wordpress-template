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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3EwP,a4G:9deT/Ds O+X0_r-jmp6h[Dx_dCzdmaiJaIX(&&h;HY$Y_AAXS&.d<0G');
define('SECURE_AUTH_KEY',  'o.vcFlj+kBGs!~xj?=XdJ6;WXhV+):|W+g47EMuLT|Dq}VXg%!z.}eTMr)@r98Ab');
define('LOGGED_IN_KEY',    'O]9wZ2PYfPH%-_9J|x_n4V KXf{#q)*r:m{o+sO.eD![a8`cVmHnJ=N}`),EzTu=');
define('NONCE_KEY',        'e1a]|Q+1+=4(QNAtWIx$Q7r&h-h/U_stSnO-9,(1pN|A3+gM{3+=r*YTqi-%+n+-');
define('AUTH_SALT',        'QOQ,;0MsdF#4B-PeAq,@]C+AZ8{>X0B<NoyD[P7w2dl~B{$?(^:R_jwni$397X|,');
define('SECURE_AUTH_SALT', 'k]+A9OU<Bs<tgVPEeR>6hk|>j< |17]<?DXFN(XhTZ<,|LklIr_eXRKUNH~n|qz]');
define('LOGGED_IN_SALT',   '|Ahfp|44<YNQwlY,=;M2!QB1=sd=|-A`he+*+C-1%DfXD$)r<g?f+:WcAgMel:^>');
define('NONCE_SALT',       'y++5;7iARls`R@c`|-)_~<U`fJ<F1klqdTjz5,ze&vRM48=NqEzBxDyLm):~=4S@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_temp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
