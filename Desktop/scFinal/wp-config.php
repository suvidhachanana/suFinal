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
define('DB_NAME', 'scFinal');

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
define('AUTH_KEY',         'QvBaEZ.SwbaZ/ 6u/ ~.cufcO%S^XXwVX?:Ne(T:aa|ib~(vU1;a6^~Qd>!%DMo0');
define('SECURE_AUTH_KEY',  'm4J=UM6;^}5[p{/BP7{i:Ni0[p;CEsTM#-WZ~s+>wm20G).s6i/jkEhnMCap.4h.');
define('LOGGED_IN_KEY',    'D2J}O0$W!>0MTEF%P_^z@hYniVWU@=9oAx$_,W(6u:FXbWHjl)g&$ef`uMW_3v{*');
define('NONCE_KEY',        '%V4kvY0)><wf@[C@+J]Vw~7o1yQHS?SNSaF(|0u7&juy7E5`^Z/X/UgBr2YlBYUp');
define('AUTH_SALT',        'k|nbKUGX$&LGhj;/,aQ*S>iEQ_W*t#C4[paC37%pCSjmH=zXQhU7B ]B2e1pQ~|-');
define('SECURE_AUTH_SALT', '!pZ1@~1y6VfYGx7@n,b]lL?d+%~,fqZNMAXFXve%iDD!32%:`!h lXA}&$YjF<7d');
define('LOGGED_IN_SALT',   '6?oEE&]nij+nwNbA]`:)Grp[mt{]&MnXbxI{843eDTC.zY}#jx|YBj)a-!6I$0RQ');
define('NONCE_SALT',       'juvBPqmStsk9$iVLR^PvLIVw::qm`6xX]UNAg0UZ?V0)Y61qdP.4{u=+OMOF~qx$');

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
