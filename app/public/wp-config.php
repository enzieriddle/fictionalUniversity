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
define('AUTH_KEY',         '3EBQeMPpAstNtjN00tYIJVlYWGW7ySp1KD2XlSlRfibj5q7Zh2qxAXk0UtkCGjhH9dZ2EjuHkFokyu+CdGaG7Q==');
define('SECURE_AUTH_KEY',  's3jfWNzhlLqcoHkyWh+oxjHc1VmOciaeKu47D1AE1STci8VSeDynbGUh2YepkJT5USedmRzI328kxnqmPWNoUg==');
define('LOGGED_IN_KEY',    'wvFWuzWlocafu7PtkUZtY8Wz8wzQoSBi1OHITo0+Q+UNMZJmJQiMNhcaCQ2zEZG3m2IdH7Nwjp7bhsXPiG16hg==');
define('NONCE_KEY',        'fNCQst6I6yADioYk9H71oEHD0OM/L/owkNFPAaWIrIeaZBnJU3EWNyrW7zGJslpLWE9z2EkyN/PcpT5eJdjNVg==');
define('AUTH_SALT',        'kADeihuKSsZhMrK/4697ogxbrpIMbZid1h3jZ8IxN9cqc6xn9VKp2FOT9SODnphBg3yBr5WfCxKHRHP2xx+ydQ==');
define('SECURE_AUTH_SALT', 'CxXRSB9FHigM+3YBEuOozxXn7x6hovwkfgA1gEBxQFcwRyQ8ZNqhdssrZguzQUdsGkVmNH3a3XCWMe14qBh3mA==');
define('LOGGED_IN_SALT',   'gx7EhJVDsyUBuPJQWe60aT0qqv2oRFpA76V+rbVJC6AfkpjLQE+ij6FyalA9fneTFUPAiAzltUPHH5bDIO4h9w==');
define('NONCE_SALT',       '9vRVIiZJ7k/32EzLKBRoU8E8pE4vtPypKkxTNpW8SCKhZix8tZ+N9FBCBhfpfLh915wXCc+kTv8FJ7RnVRMvPg==');

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
