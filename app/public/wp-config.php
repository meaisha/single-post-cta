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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kSa2IiNlVhGw6VHmzv3WNHaMw3Wq/ducWq4NHtIQ5jzxAWUdywsAKif9M4gkV0IKvdzJY6N+SHN/XmG5xgkNQg==');
define('SECURE_AUTH_KEY',  'FTEe04R71zpGgYW9b+wmw9bqViGweefJ7k7Bq6Z0OKBlOGat9HDQKCnp+ZjfSLoWxi8lS/xslIZp5sq1unqsJA==');
define('LOGGED_IN_KEY',    'WO5TXr+8M7CeVMo8Lobvi14QsNWPwcFs23LQZVkk+DlGv4aoj+2Gdx2NvuyFRRQzTJmPqhTFyEfUUNk+I+3GOw==');
define('NONCE_KEY',        'vh0CHYWJSbN3ZRRym1e8s4/MRY+JSuZ0j6qIZ7YCu/5hu52wNBYZPsnsTNa5P4RU3eJn9jf0sm3p8gNd0Md3Fw==');
define('AUTH_SALT',        'jI2vXOMAcFBO/H2eNFLrxSJH4bBvOdqstZGtJ6Fcl5iM6pNR8cQNsKVer3F45yNlsTbjiSrU9tPUKO6CcgVJSQ==');
define('SECURE_AUTH_SALT', '27FLJrpRoA5UAOQGvvdnQZx7R/y1Nvbqmh5VqjTz5N01Bz9Zf+2AgZbzJ5J5W7abgop3Sq+F/DMHBq3keDSnJg==');
define('LOGGED_IN_SALT',   '76IILgp9jDunmIb83DVrpywkyg5nFdl4JUttCcvHQqGB74BMbMipApo0YTdcmXuyuGFCAAyb1PmxwKdr2bvgcw==');
define('NONCE_SALT',       'fnPpEiCqWSSzlLWRafka5jhvhUnhyUpr0HX9I6x+3O8Zy82OS/IhYxSrOpBuVGqO6WTtPuY2gnKCy/z4ZJX2vQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
