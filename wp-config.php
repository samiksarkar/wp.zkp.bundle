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
define('AUTH_KEY',         'YC)qkC<P#av? #1*Z=~|z*b4+r#}QV0+HbBg{`RXHCf$]C+64 cdlFx&b>zt%I<H');
define('SECURE_AUTH_KEY',  'T$U2:Rs9rA; WF4P:,+| >ktGu-!(<+I<GNxm1-%pI+OJSDyNxxj`Oy#%-T+6AC<');
define('LOGGED_IN_KEY',    '}|z)XA<2LI:N,4|+83k8Z)Q#UF5;2QfI(m@O|<L>A9QciN|d%FQl=F!hpK}VK]1>');
define('NONCE_KEY',        '(|noW_)k6=#q7On%c=q$TvL0u]TtOLp~R3PSx|tex<?+LSkW-t!Yn0d$6rd9Rljz');
define('AUTH_SALT',        'Vs}DJ-0:f^Q&k7j,Hc#Or6@22QJgW8v@m=m!^&FQ:`{wb-7L1+.G[8Poc)G:UsJ7');
define('SECURE_AUTH_SALT', 'U&}~|KFUkQme+v~X#@ymR.YmbAhP>We-9V~3uu3)&>D]+X4|myDB]P[VDU;tBtMv');
define('LOGGED_IN_SALT',   'Lt]qAPS-_s|LhAR],+K*t:q;q{BF*y6j83VB1}2q{9}-Thu9XvWde2.`{b>~s[f2');
define('NONCE_SALT',       'mO.(L^ft,e;?; <I%x-|L~nHh+(:,[<8R%6u6+Vn8yz[w+jXsWN[L8Gx#7pD9,F:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zkp_';

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
