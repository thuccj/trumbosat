<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'trumbosa_wp57133' );

/** MySQL database username */
define( 'DB_USER', 'trumbosa_wp57133' );

/** MySQL database password */
define( 'DB_PASSWORD', 'G926(]S5pu' );

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
define( 'AUTH_KEY',         'j6bowh10zbkzgazxqzrumswhtxdihpzfiu1ywbx736r7bkxgbfbjktublka2rsdb' );
define( 'SECURE_AUTH_KEY',  'eayrhiwq1dryjltcj2yarouvzeooikqtahxn6vecgpul4op3ch8aauk2zsqjupq2' );
define( 'LOGGED_IN_KEY',    'jpikgwmwgup44pvwm9eyhvfpe8dt0ishp2ngzkx92pygvpbjykmhxpdev7rzpcdn' );
define( 'NONCE_KEY',        'wpwd4gsctwrn0io9despyoitj58vnmot882zqzuz7oqb77qt5jx0mbcbnzlzj9b2' );
define( 'AUTH_SALT',        'zghe5qrztgkoayuxlfvn2s0il7teqyznntwafjry7r6dmqtnato7yktjpedear0i' );
define( 'SECURE_AUTH_SALT', 'unlc0flqeob0pmxoyikt3s17ii6ooostv9ncqcs1gyp8rj4el10m41ygkhuduwr2' );
define( 'LOGGED_IN_SALT',   'eeerytffrneqsfy9t0oxpy5vownuexgpzfta571sawbngc2rwls2z3ukcvjmww5q' );
define( 'NONCE_SALT',       'nkwvyp353q9omsb7gzqgxqx3cfdr3l6kjeylevvolayki04pfpb8cye4mtl30qm2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptf_';

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

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
