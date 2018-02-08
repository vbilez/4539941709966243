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
define('DB_NAME', 'libertypress');

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
define('AUTH_KEY',         '^i+ZO7ZrnyG`*sae(h7rt:}dQ[C<V {$n1R<3L4-bI763^+.<o@{]yY#R7WW,bS)');
define('SECURE_AUTH_KEY',  '+-0)rzL|dsr9JNDdqHde?.)&3MY7FAq}hMjFp7Bhfca2U6Ea/C[BMR|&6~#F{;3%');
define('LOGGED_IN_KEY',    'l-/+,V;a;!TX`?oHq5@H~1Myx+y?J`lU$0d;/mp2g4nk3I&9*J4Be9Pp&5(N4-0J');
define('NONCE_KEY',        '!XaOg]o^ 0miRUq%]M+S9;Xq|MYN3aJ+5)QEclu}c3Gw:[)WzB;E+T#t:pB_wIa!');
define('AUTH_SALT',        'Apc&&4q%u`>M;($+l6SpYC5i@-OM+j-UH<Z_cHOw:g5?tEJ4w|JCPJkl>>[vm9yR');
define('SECURE_AUTH_SALT', '-%hdd@!g;.Ei|^r mmV^y@h`hJimK9_-%4|JW|vj~1|ggjvS3dz_nh^*Ru|`b-;n');
define('LOGGED_IN_SALT',   '. 1axo8dK~`-L7A4 3|-i?+E[w|.L+:$n>Tvl%+7!1sTdz2-pb}Qv0vTQEiWX_.<');
define('NONCE_SALT',       'ha6AjOkye+ S2D-ZH``qex#s9y%?$Vi<U{h%WrYQz[ -}DjQSg}Ss:jeTk;4_ih9');

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
