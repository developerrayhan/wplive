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
define( 'DB_NAME', 'develo46_wp866' );

/** MySQL database username */
define( 'DB_USER', 'develo46_wp866' );

/** MySQL database password */
define( 'DB_PASSWORD', '[Sz]pj07U4' );

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
define( 'AUTH_KEY',         'egjzcvbippphrfhkqbia2axzndzxgsbpapn2lq4kqnipggcjlp3txvx1rj4n4ugh' );
define( 'SECURE_AUTH_KEY',  '3p0gwn9uosc0yermr4orai0r1t0bw7dgja7jtn1an1smepgnuxonjjwivfpefz2t' );
define( 'LOGGED_IN_KEY',    '5j68zccqqd7cxy7likibk42ebtshgeb9bq2s46trvy2jg9kxigtut9gt14pe3imw' );
define( 'NONCE_KEY',        'ladkfn63qdfaany7ytx1bc0t4gfa23bfjdve5e5plx3vcmgqea3zhb2pzbtjlwff' );
define( 'AUTH_SALT',        'wrzgoafqixzvisfvdrdutkrcj0y20kvgkek6kbezo05az7rh9kmtap2diqp9kv2x' );
define( 'SECURE_AUTH_SALT', 'z778cnhxvfsgpqtt8z6hfg3a7mrbmgsbjzpj3yhvrlzrco8uoapz90yrtqfrwlxm' );
define( 'LOGGED_IN_SALT',   'vkpq0h7oztjhjskpyda4jk42odmxmmmrwsehjodralipjchyifqmzfl7obtoso15' );
define( 'NONCE_SALT',       'qfcpzzjqu1cw5kkpiduwjlstqh4akjzs4rawkh9gxpq7ynfi59cvm37fpzrsrr4o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpix_';

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
