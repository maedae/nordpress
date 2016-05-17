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
define('DB_NAME', 'angienord');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Ca< ZIn^]K( xSAUMx2hyu,K`_k*VR3%$vX&d}}HV<,*5lsldYwA{e)eQ{R#yK:q');
define('SECURE_AUTH_KEY',  'goM:OGs;s?jE]<8=[S*iQ($H/F^vo 3vbNAg{=~VicD]u&2=~M%=3|RxJr47b;D4');
define('LOGGED_IN_KEY',    'R?)gI=mL)xQ!y7)_xSO&nGP4G=44>5lrm6[4{q@.dlMT*%xfl>l~78oa?=2IJ|KD');
define('NONCE_KEY',        'G9# -N@F||^J1]BG;XmMd_K,@?n5 O]8HGl>:]qs*lrvU?)B=[I:FU9xo[zp^s*d');
define('AUTH_SALT',        '`[w<nOi?76Cj)1`<}-?[%%n=evi3|?c%xDB pE1]KICVv|.]JQ p^.tHd,UAHPFO');
define('SECURE_AUTH_SALT', 'A&o@-L8=y<i:r7wYUVAgOS-JcUmX&YDQtkXc-Q3E$fx/1ro5U7xYz*ECKoHvDK25');
define('LOGGED_IN_SALT',   '4mN=Y`GxTQ4VRS#7HHc,qRn{S}_<D@.u`!Qg2<hhqQ}GA;Qp-,ORu,3`$w&-QDo}');
define('NONCE_SALT',       '#AlLXsP%EprxS$veSnKvin+h?$(F/#huIc{00AEe?DsnQ`*|Qn0Uy(%O*B9Lv9@5');

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
