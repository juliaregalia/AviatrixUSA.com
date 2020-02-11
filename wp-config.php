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
define( 'DB_NAME', 'i4715827_wp2' );

/** MySQL database username */
define( 'DB_USER', 'i4715827_wp2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'E.y8qRnup1zIP55A08f65' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'sqFGjpez9o6Qq69VxxvqyVkOy7fvNrQ4UelLzR9rhiuH4zrvf9hNVoqiV6S7Viov');
define('SECURE_AUTH_KEY',  'ZSTbKtEJWIBbkgdePjKea6V90hCLAl5lNbaNzXgKASgeZHhD38XTrGoTCrWPlByY');
define('LOGGED_IN_KEY',    'e4MNHLahDyBUbX0nj2sCR7Oe9RfkwV5qTh2WjnxQp268J2JUGcETxqq4MfqZEyWP');
define('NONCE_KEY',        'vbwKNMq86LSDCiaTYG4Hm2sN0hrQdiLo1VwWXU9dmspIETYP0AHcJkgJS2FHlM0W');
define('AUTH_SALT',        '7oCZZQkwphT7bsEGm4Z7v7tpUhJuswhdO7rJJ4Ujc8GyJmmEgfwgUazolypHoldY');
define('SECURE_AUTH_SALT', 'VapEaK2wT3MVwYbsGlye4LsfRlcoaoitc1Hn5Hl32jFkF2GQmKDgcs5vYWhJ3AYs');
define('LOGGED_IN_SALT',   'h3KJ0KAgq4zXgzpw57DXxh3htdyVuTio7YP1BoJ0Sl8jVzmcBDmtzLD9hGOEAyJN');
define('NONCE_SALT',       'PM40T9znOucOnXQCD2rOvqO3YMdw13hHwi5dvIdaO68aOFz7giG0ivLVhP8LyurG');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
