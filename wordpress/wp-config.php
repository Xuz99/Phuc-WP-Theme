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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'phuc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6YKH4<n*i((xH4W+3XGz$bn1jQ`#>&g6s8r)|K0LA8wkXhN0UH4jf?y!k{9KzdJy' );
define( 'SECURE_AUTH_KEY',  'wl0xXPV~yB],` ,i`0hbw~@K[*27#B&o#V+M66Z<+TxH}Jj%FkE0V_) O)nJB#iS' );
define( 'LOGGED_IN_KEY',    'E+%9xs#MTVAsse@,IL:sQDR8$*ByI+7q7h_?}#vemEJ2d>?>*>tenpr*MUz:YNh1' );
define( 'NONCE_KEY',        ',0#gQ|mxT0)^;-k DoMgvEARV~<lmu7iB#j{cBNL8N|a^)bpk{%6r:)!M8!, o;]' );
define( 'AUTH_SALT',        't}zrmm$rBUimKx~aMO^<>E%^p4vAZ|* I,H:/|OV b~bhoAXjL{[vB?Ex@].S0R(' );
define( 'SECURE_AUTH_SALT', 'e.%<NJ{g`q)R|s U0.kH-iNNQ/^fP_0/zjI8c>!VYeIG&Ga/}oxx/VHUmiXbtcG%' );
define( 'LOGGED_IN_SALT',   'eOo4va7o#/:2J`4FaeAdw4e9jk7SgEz>G 6.r>~,9:%3F@DRclQnZC5-28r%{Cyb' );
define( 'NONCE_SALT',       'AwnA9Ia>#q|EyzM;.[K@7&EBqMc}=#BD29Ps+s^m~x2Qtdxo![W;u pdpQ26MzuU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
