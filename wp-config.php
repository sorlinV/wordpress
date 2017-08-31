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
define('DB_NAME', 'firstwordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wqaxszcde123');

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
define('AUTH_KEY',         'H(yyG,tD0Q_yZV8vo5}N^SaeQeqO<fr<+9M7C`/,M=NkWN!^E+ ,-;--Yae4H*{|');
define('SECURE_AUTH_KEY',  '~`ftE+G6kPeqW%Lh8]8o?O(&a#-]FGWeP}NN7tlGW1RNj}$XaR%W(,*RI0gD{UV5');
define('LOGGED_IN_KEY',    ': Y!?j.,j-Mo~rCBDck!$E0K`Q3^xpbTzHalci?mE5$[Z(?(UkD23VZ.<mzlr6PX');
define('NONCE_KEY',        'zSDHwz.,8bl6W[@f;M;_^i^j8XozC`GC|BA4}qV3M6y@rz3.<y|;j3?c(o?.JMs,');
define('AUTH_SALT',        '^P, 2;/+OO5G1919{?HpAdfx$p|]qYp>8VbOYtMC~zQebLb4TF0`V::@}n0Z7!d$');
define('SECURE_AUTH_SALT', '/n%4cfRN oUt~6a;I$u)+q,YZxQ#a {a~PcXx]3kYnCj_PjbFb&R7ml>-SOCKkaB');
define('LOGGED_IN_SALT',   '3 ??|BcLE8{z{NVe}:/0+u%-T&r}dJqd!(r&:!;0?o{HPP(qy(FZ1.n_^`N7%2Kd');
define('NONCE_SALT',       'aH>xCnZG/qz!e;O;ErM!5QR/Z{2vx9DQ9B0Q|i CI.{]ZQhs].XO0@8DZ6##/{zv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'word_';

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
