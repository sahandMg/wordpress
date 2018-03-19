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
define('AUTH_KEY',         ';K(!):8Hwhc|ElR~nMm1Q Yn}!>7![(EJTX&|{opSWu=O0V,X!!@k}8-wj1A v{K');
define('SECURE_AUTH_KEY',  'tM+LD8ztA+%osG>Q([Ft8s7e@v4hnW3%lP &`H*4AvRH77#5||9{IP|6m,d[Kz~M');
define('LOGGED_IN_KEY',    '(U c@IV>;^5ux 8!t0:G6%CVlIv(PO?CW#-,}E-DF12Saw7>^klV.s~]|(L,PC{w');
define('NONCE_KEY',        'ud:;i8bT>q<9]eZp^qQJ^i4(9BHgP4c4Ts^?->2$t<yO14uE>3.@#]/G -?.}3o;');
define('AUTH_SALT',        '/_poQ:G/ _w,Dkeb>}cDM0wvjzwv,8M1d)dO1la@f#4K<`Bi:lu=^!]!aC_iB?|L');
define('SECURE_AUTH_SALT', 'XCk(E*s^,iE(LmGSl;?+SX/lf0ucOk1o_fNCV$`xQ*TEeBnw**9oy$stPgIj_QE`');
define('LOGGED_IN_SALT',   'Pjp{r|}s)0g)xw+zG| bFVr~Y^W;N4h>xb8^q&G;v+OG#MTol~z}%b.D*<e`)hl:');
define('NONCE_SALT',       'F$DIGJOpC&,&:7- }_t<^,yJ~&lHJi.A%}Ifu0N]`7%t%lm/$lQ:dztuR4/OoND<');

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
