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
define('DB_NAME', 'wp_falcon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dvd12358');

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
define('AUTH_KEY',         'xLeU9frXS_]8.1c%`7[}P_ZiJ6MvD_(0H7W+#O}{OL,<_N!DpeHzHC[6T0gPL^Qs');
define('SECURE_AUTH_KEY',  '8<UQ;pxhtbu!*X>t#}M{p#Hma=unT;?xkqBGuzLS4)+w_zD+X~7Fa blG.~|y}g{');
define('LOGGED_IN_KEY',    'h L3|xn9eIH#2L;<khmx:HtbK2TKRy2/c%qrZCR-8O5QH}bW7{H0dI70%ToVOYQm');
define('NONCE_KEY',        'pY4{=_[xMim:Cx+5ysxdUQ3b4wnf,SNYT#*qYoDD5{IJ8O<]^!Wz<Tso7|rafAR*');
define('AUTH_SALT',        'tk%(Bg,fWJinH6<[QH^O,I%XL9~(Y<(vRm}+CZ)C)Bt_Gc+!CMx99Dy_Q9= eR|r');
define('SECURE_AUTH_SALT', 'g4MEdPBqL8-iA_wIODhP_mgHU{e5My9c;7wr9lpln8i6J*hy3jI*.2E-B6r@S|c<');
define('LOGGED_IN_SALT',   'iU<f_tiH@MtuoU$^-NAmxM5v$(g-wb]&JW[dct7aOt(abIz]:?K:}:z4yiL<n$5 ');
define('NONCE_SALT',       '=f;[Y898DYcCK2|c[ Mp&FApHk8DL:E~3*6RzGYuFoK$GY4$p>v$+p(jX<0TZo/d');

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


define('FS_METHOD', 'direct');
