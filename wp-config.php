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
define('DB_NAME', 'db647166752');

/** MySQL database username */
define('DB_USER', 'dbo647166752');

/** MySQL database password */
define('DB_PASSWORD', 'DcdhfXeeqpc2JiCfhtvYYp6AJYHF');

/** MySQL hostname */
define('DB_HOST', 'db647166752.db.1and1.com ');

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
define('AUTH_KEY',         'JQ)c5eDnQLywtaUQn2l$q g;F-.-L8LQsfl0]ND1kcv3 xaJGkDqAwYf(2{[>dV(');
define('SECURE_AUTH_KEY',  '$Y/G4oV}mUs4[z)&yym))T6lV8(eri&T()+o6d$jy@{$1TWaXlvL8VHnD|3$yO%k');
define('LOGGED_IN_KEY',    'f:(u7}s6?vo6_kNaNJ=6.[3f:@2 DRRZH?ThRgO<&G{(]@,_;vR0`P9wDF=v3;!t');
define('NONCE_KEY',        'O ^Kq$=UnOVZuT9NO^?YFz23$.Cth*p>eO/OsJH9fV]e77brHwYkfD;BQzY9JA]`');
define('AUTH_SALT',        'nJaDCy}A5NQl*3./%&kdw-,Y*G`4evb~4/v$Cu ]kZ_al8#l59XnAt vbt3_8Rc-');
define('SECURE_AUTH_SALT', '_8F F9jW%Zcxx@K3M?[F,{)}hWQCCxLKXr&}y4-e&^2>c>84HO7|fZmnSB{6GGj_');
define('LOGGED_IN_SALT',   'UAF=rAsZSN&5R76!8^3hW.Sk`B[bDbtWh|-[^LX#Agx_HnAEet?aOd/B>75TgQ#Z');
define('NONCE_SALT',       'yf|}rQvx/Ofsm7?wmVuxf,?0w|0ytfI<DsL0*}E6z@N|nIC}ZS=YXG:+)%At7KVB');

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
