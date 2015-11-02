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
define('DB_NAME', 'property_developers');

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
define('AUTH_KEY',         '?lS)`q+JH09.#njA0E$C5W1<btC>l;y*yiTBu;O{$I1qy=*L1^Ep4+|P$Xck<-kJ');
define('SECURE_AUTH_KEY',  '~ahWdN4 3^Lr10l}$UBE*oWWo-H@]H8ppSALz693h!6d+PdGN=B&m3AtDN0VYQOg');
define('LOGGED_IN_KEY',    '-Zhti-xK;/]vB2%v%wWkt9ZM4-Z/L;zhb|hx7Qg)4N9o a+!O`-4^*d}Q5^2CsrO');
define('NONCE_KEY',        'Nesy_P]{)#P%:F[Uw[^V88}W&88O@J-b-`+*D*PamVWp|`_ MSA_3(I@}bA3PjqJ');
define('AUTH_SALT',        '( D;<y?6xiO W@},W0.?(*@-EM:|E@HCsxo=|1*R<PG1IwB(00a/ueJz-= 5+fI%');
define('SECURE_AUTH_SALT', ':P}a-Srw9MbN{=,xfb+^D6w^CA=<e==p7|*^4s`J{:ajm9:itZh7@#HW|6XLn{ t');
define('LOGGED_IN_SALT',   'pV6ahi&b%^q ^2I8nS<v4Bvi]YOW@;f$WEmxYTdRrY<o{-+p!lqv}KAWa_;Z|Q;5');
define('NONCE_SALT',       'U-0-iw<l78R5&FI/|~4)l{D#Mk5+AMrD)x-_h(-+Qkw|z&X8|hOg~5]yuSRl5`Y9');

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
