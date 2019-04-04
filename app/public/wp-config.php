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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'ijyItaEoIQH2E7jll3pYJ8qnRVg7zLTQJ4esfGutyZhHroGl80D0B8PUFwgfqth+QRt8XEIq3pACTlrjrmWqBQ==');
define('SECURE_AUTH_KEY',  'e2YAIHsmi3QeiPag5Bhd7Uy1vivoYQ9rOQPMsUrXoHEHtz7D9PKg3q/zrgfU9OXUPR2t1NoKV/tFAo4O25fC6Q==');
define('LOGGED_IN_KEY',    'JRSw4CUc4X2gRv99b+qwdhKbpL3dFc8gQE2Fx4NLcT4ROvkcQ3ob79Y42p/7KwhMA8z5Tz6cPxqdq7Pudtcbow==');
define('NONCE_KEY',        'EZQw1rHg/dVsu8XxOayzE0jvNoIkZXylF/hHBshS6JVPvzjfWYSNOHcHi3h01dU8NfA71j/1h1RenVRPjvOlsA==');
define('AUTH_SALT',        'il5O1VkCCYMBIzyoy1fi6pZUUJLbBPwdA4Sv3R7/gxY5FvA4cScssbDO5jT/KQyzRHu2It6POyxeVfY3weOw+g==');
define('SECURE_AUTH_SALT', 'TQbgP8Jv+aujZtBRPmaTFfMJtavXOIsHKCAuRMThJGE1BABVvtgwpsQvp0tiY8a3reFXsL43Jtf1mPZNlT9DVA==');
define('LOGGED_IN_SALT',   'WzHO40K1vdFPCYr+5Yj+jHWi6UbDlCDcMe6QTZwZDFEJ4Krewz76/U6zIupVbN7ulTl1yTkyiBVaOhJJX5B0xQ==');
define('NONCE_SALT',       '4l8UcDEy2LkMz4VFfqyQ5D6BrDDLPfzV/fUTS0/BbqANbrmGPt1/FvytrrJ0vQmXaTOntzbbKoZkQiujrGTqVA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
