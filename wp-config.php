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
define('DB_NAME', 'wp_leo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'wSNx#SuEt{rOET{fN$THg~]h|l8U*e-oY_dj6Gi<aGe#l`wTjcxSGr?U{2LQWTy$');
define('SECURE_AUTH_KEY',  ':Ln.-B_6Qf>i9|gFpIJ[ldJ#n)rE?-8V[e|;[:Y{J?r!z*^cqEQ=] P-U<y>/0yC');
define('LOGGED_IN_KEY',    '/P,}0k<;n-5UK/[v+t_X{kIazELfl6l*N%sk||~F>_ZN,C;NC;?[ekq8rkC+W}y6');
define('NONCE_KEY',        'iIs.-nXFc|olz}0?s!Ux$-JxehJT&Q;U7r+ykL;#jD$vLTy.C?MW@1+9nOP|hz-T');
define('AUTH_SALT',        '=Cf0)TJWd&*C@4hR}I`<2O*jYJ2P^<xV$msf7j[x2;Y($Yf7V|=;WGAF+jk>aR&$');
define('SECURE_AUTH_SALT', 'iV&`0xd:yFtR9dA3vtRHQ O3t=*F5|)1Tn|yBI:+Ed//|-YwzLs}~->0bqdMQl/ ');
define('LOGGED_IN_SALT',   '?0Tn8{UB-%K=A--ygWD8Y:r>6HBzOTDv{+mp^`rW;ew?c*-XPhI!Q^Fkz$$YO>fC');
define('NONCE_SALT',       'S08G{m:,Z(XCN-|43&y57To590xNMi^U<<^q97wa~yFH,G.nmaRzH|+*fmnaY1r(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
