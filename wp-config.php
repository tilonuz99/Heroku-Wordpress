<?php
$my_env_var = getenv('CLEARDB_DATABASE_URL');

$cleardb_explode = explode("mysql://",$my_env_var);
$cleardb_username_explode = explode(":",$cleardb_explode[1]);
$cleardb_password_explode = explode("@",$cleardb_username_explode[1]);
$cleardb_hostname_explode = explode("/",$cleardb_password_explode[1]);
$cleardb_database_explode = explode("?",$cleardb_hostname_explode[1]);

$cleardb_username = $cleardb_username_explode[0];
$cleardb_password = $cleardb_password_explode[0];
$cleardb_hostname = $cleardb_hostname_explode[0];
$cleardb_database = $cleardb_database_explode[0];

define("cleardb_hostname",$cleardb_hostname);
define("cleardb_username",$cleardb_username);
define("cleardb_password",$cleardb_password);
define("cleardb_database",$cleardb_database);
?>
<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $cleardb_database);

/** MySQL database username */
define('DB_USER', $cleardb_username);

/** MySQL database password */
define('DB_PASSWORD', $cleardb_password);

/** MySQL hostname */
define('DB_HOST', $cleardb_hostname);

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
define('AUTH_KEY',         '#C%Qv9>|~:tlx^[XwR+#Xi@(Yy!_oQ2Lyr[N-C+&O>r^>W-Zkc:,PHJv`|z-|zv_');
define('SECURE_AUTH_KEY',  'yoqC@dcS8V+&9W-d$9;Vc.}zp=rz:3M>uU?Z#v5;-sgzGms7.je,.cLn72v-ByQ!');
define('LOGGED_IN_KEY',    '!c Dm 0f%r|VGj_|VA_IK 2q.n()XNb+=J>)8ulvswABL(.M@-k%-[~ooy+&W}0t');
define('NONCE_KEY',        '-ULI@DYkzrc::>}(W+8PefZzy+*E*cZSJOP*9[t +#m8&OI/^(n)wSV,)v ]|6^p');
define('AUTH_SALT',        'SWaVh+|5k+H3+3`z$1g}b~PC-|Ogg}PDlNtAIwBg29`ydd25|ExLm`+P)q]!1PvL');
define('SECURE_AUTH_SALT', '>RbX0yChKp+%/<s3G$Z5|jv{&Atz0TjlQNOHoJ mftVm<133gGr)Vaw@,gbn}k,a');
define('LOGGED_IN_SALT',   'sD{E/SzDq{fA7}~%^4V%Hf0Rir1=?Tw_I77L]y,I)U|p>h$;Ps_$.1a(V-_@j2},');
define('NONCE_SALT',       '<p~@L.s[P>`-LPoYU;(m`b!ZGpgt.IAY{[L&|>8;^U,2kK-c}$wPc~|@8++x-1-.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dk_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'en');

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