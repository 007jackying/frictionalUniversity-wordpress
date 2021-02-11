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
define('AUTH_KEY',         'zNiiwesz402GMx1bUOPMnvrsBc/hgRtBbQ2r7gGnQzGXOoAHtV5grqw3fCOjnN5XOkKrhyqBMibanUNoK7smBQ==');
define('SECURE_AUTH_KEY',  '/mmYzTnI+RDIcW9NDR5LfZCGr6M8qohEKU1cX/YTtkKCCvZsythPkW4itRrhawVa7os/RCivzBqkn2ny8zzmAA==');
define('LOGGED_IN_KEY',    's/06ovWxZRiB9uV04IL+xUTIRyToGR0Ix7tKySHxrQLPInNo+iTcJAV9LO/XtN5oIykNtOfmNxawvfGw9ysSJw==');
define('NONCE_KEY',        'kVfa9mlpNWsoRPmexI1VAxBNULi646LlFYAtc5PQJHFQHn/vQRHmQSzMhINR/+0XxCisPWZXMqDmthP3m096Sg==');
define('AUTH_SALT',        'fbP9NX5sO84eyomKwr0aRTNyksEMmLqLyTWtQmfpCT9uIirea76XZOptOWuEHAIRIFPIij4e1s0febdxa7O84A==');
define('SECURE_AUTH_SALT', 'UD6O0J/DzJS1CyRsEcptBVSsRqKEwk0VdJdxmRoR4gPfFNaybzufFom+rKdrNJnkfApY+MHfyFbdlx3hyf7Ytg==');
define('LOGGED_IN_SALT',   'jaxQtxHvnL3XCfWfV2nH8ijgmDQLW+Y8lC34/3hyYSC0YVNcUCuo3eWl/64G/P03Q7kVDhvnFt4ZmKtwK2Ba8g==');
define('NONCE_SALT',       'P+P42E4OOrClqGLZTNgaTvj6SDWQ6kt2dKGx36UBg2qfYXJUhqZNjXMSc9yL4yijwa79b17ArJme76gNKwaehw==');

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
