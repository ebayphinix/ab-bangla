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
define('DB_NAME', 'ajkerbazzar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'A{sl%`c{*zS7J~@xrih{A4!_*5}-;6 O}A$2.7_^&BCc7$6K{x?[?%SC1T9t*OR3');
define('SECURE_AUTH_KEY',  '!w#`_#k&FI;hm6SLd>0N;1-Bj-}(dv0)[ReYMH+oRv.exs=r|vg$LV|O,D^</]yV');
define('LOGGED_IN_KEY',    'jo]HR3_]<)?5tkMY_H;-#||ad>wde~Q=j*^w.Na||#VG&W!;%>:h1MK~vrC(!GsV');
define('NONCE_KEY',        '>Gz:W B1:F%y],[EC Qu+ak%pEwfnk?um{>%PPcj1ho|f^Kz(_Z@;%k (_n02nc6');
define('AUTH_SALT',        'L#[$bV(Izu`tf~aRknU1&aB6x?2?&&Br[Qw~A4UdW5DoRSO|7H-Mpdb2+zl`2?xr');
define('SECURE_AUTH_SALT', 'uOCVq){||gSz;]#v7kZ?LOYv3QU>1<]i%e$,Cll#Sn4Qet(WoA{@#WSMq<jD<aoH');
define('LOGGED_IN_SALT',   'qZM!zAS97RA0B7:{:c>=O`-IMA@9S-yh=OO<Bc[~/+lWddA:OsL{g4Ju^3Z6sBax');
define('NONCE_SALT',       'R;<|0]+}_7|?X`Rv/aik5BhJ!ZmubCJ|3;PkJ+~|T|-=TJpqwC.P82;(`8ZdJEhX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'baz_';

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
