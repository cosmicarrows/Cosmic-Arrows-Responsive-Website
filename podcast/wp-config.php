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
define('DB_NAME', 'lwingo1_wp1');

/** MySQL database username */
define('DB_USER', 'lwingo1_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'E(h(fcMhL1@R(EB&Wg*37#*4');

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
define('AUTH_KEY',         'VIarq516YWPB5IkeCEtewxTMaAphyqAllvFwozuzacdqaURuGBm6r3r4C0wm7HDH');
define('SECURE_AUTH_KEY',  'MZ3WXDze8y8raqRUpAPsWAXKqiwv1z2tNWnNc5TfWSs7EFJSD8YeXtHkLdmqYWAt');
define('LOGGED_IN_KEY',    'mZ53dVCqKLucCHPqZSOfVON4QNMoOTwVIgJhJX7c3koaFQLdTPx8RdlSSrsPWIBV');
define('NONCE_KEY',        '6ckpdA3E1EpNJWiCCygoVumzPxfkAQbtNBzBImWDxbM4snkhyD71sTSfjg3kzMOH');
define('AUTH_SALT',        'V57yHvuiMlmU9V88z1CPlrEWZjEyZdjE58FKN5ZDUBqZp5bTkjEAZDxyO9HebTNU');
define('SECURE_AUTH_SALT', 'dOngsoKzThvJ7hbW8bags8KTzFNfFimlrTjZ1cv8XjRH8NkwOiRb1nimsbcQmpnD');
define('LOGGED_IN_SALT',   '05uZqb18osF9jlYHUyl5lCSDVH2SAgy9YtR6U69aR4vDYB5ov3Qzm47JnCvTZtt0');
define('NONCE_SALT',       'S8Y8vFeGF95Hd3GT9fFcrUYYrfAdx3AsZPH5vmgy7844mbpEHXMmvzf68HWHUHNa');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
