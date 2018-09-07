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
define('DB_NAME', 'wordpress_alberto');

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
define('AUTH_KEY',         '*xQiXHN338S0b)Cdb!aL{byvP%a5Q|uf<Iw1 l)r<o43xz4.})NN1]rQ`-6$61sl');
define('SECURE_AUTH_KEY',  'iQUIf=VoVN%[Xl`L)rW9-%B$jzQaG<57<9u,T/(lAbL(GANqbVWEbJpm^++Gh`p_');
define('LOGGED_IN_KEY',    'FuTTmv+eBeeurN+$;j*/,P|FTe-Fd0+/F1~qbxX8P_<f32Fs6/:TRx:/z1H.8FJ~');
define('NONCE_KEY',        '9BD2<KC+pS(r3$BxynXJoEs]8rkVwB}DgCPZzxkb2>TnX.**D:n&Laz!8+= XnpT');
define('AUTH_SALT',        '*6|M$j.8l,wMF/DNv!/@90ju&T>&>B[4cze8X~g^!:SO(*:e])T=)lWQJMHW:0VK');
define('SECURE_AUTH_SALT', 'QVmrA=wq5_A(O5`e5fhJYLM@|dZ?^.O{k6 a1Ts[fe$;_7O&:5c3tH<GQ&j9??(;');
define('LOGGED_IN_SALT',   'PTtEiBLrT~-?$%sBkDe6rB]{!(9L@N6]yGOXKMtuz#2F OR4n`}*&W~>U!YSf]Y^');
define('NONCE_SALT',       'ddfl?D,: !b_7/!uOxqBJ*$,3IDkTKU/7PTd81vs|Zvi_i5MfSS;-s97$.M_4)cV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kl_';

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
