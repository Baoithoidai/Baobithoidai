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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '202be8803f157ef');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'b=n4 <W:XjHb<[J@p%kjGuJmZfb,<Ty!HL_2=S6}CacNRE(N6_lPi` s|M]p}!as');
define('SECURE_AUTH_KEY',  'O?0_|?T-&0[<OcA|E[{>H_TD*G;^zQHzO=/(UC5pI>2aC+Nay[!WuswbW}T,@npK');
define('LOGGED_IN_KEY',    's`%tn11k4@~VISU;D8HIoc%jV.3T|+D{eh%ba|J9]+9n+tWSOHv{4-<+N)<+%Rq~');
define('NONCE_KEY',        'OdxLB)`_+|1<ZrxS;UwFUKs&)S!5((>Z2gF@$px{cs`W?!*I*T.c}:Og:*2y=I78');
define('AUTH_SALT',        'P#}!r gO&hw+rcoF}VH>]B<aX2-)jf-oZ3!<R.xn0!V9f/*%P}4)I~hBNC@IEK44');
define('SECURE_AUTH_SALT', '.K49A17h6Q ^!CWMGwA+k<i-y|hnFJ>FfWula+M:+^^!__3zV1,B2I#~a_ws*tWM');
define('LOGGED_IN_SALT',   ' <A;T3qa+1CrO4(66<{tq94n]Gwpy~@~v-`rWMxZ-f-I8/LJ,r0ROn(A5u{v|go>');
define('NONCE_SALT',       'ILs6x?0I8Td,MF7E=%eN8X3&o&G?z_$*TgL;B26$bEzJ4gM0tRF]]*:?P*t1Z!+8');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_202be_';

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
