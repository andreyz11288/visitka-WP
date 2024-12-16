<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'andreyz11288_forworkf_wp31' );

/** Database username */
define( 'DB_USER', 'forworkf_wp31' );

/** Database password */
define( 'DB_PASSWORD', '3SS.5Y4[pl' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4bzu3prm9e99pste2pu9x2xamavj2tunkkklzvhfkegq1hkwsemfklxroam5x8bc' );
define( 'SECURE_AUTH_KEY',  'j7thpq9v5qd2cfmwypha33wfqrxjf8ocgkvjxhzvbxnlogf3uoj4vi76abuawr96' );
define( 'LOGGED_IN_KEY',    'xag9ystzuaio1y2ced67zyfmeugrmbh2vxbxw0ydafeseek0senk5t3uttqatrlw' );
define( 'NONCE_KEY',        'yjcyxtjnqz32atjwwwhkegbufokuupm0fa4m7recjdhafkp6tqhml9bfuoyvrfpe' );
define( 'AUTH_SALT',        'iqmr823kxqscuxeztddqfgq36jmxgfzj8wcuncofcnq5opulltit7jvzakklrggm' );
define( 'SECURE_AUTH_SALT', 'l4cluceuudb30rhtvsaukll5sagsh8m24tm8lfsrhiglvvegc893xypzry3zvfsq' );
define( 'LOGGED_IN_SALT',   'gkc8allciaozvln3kvjdnmqkilx8kht6podyeamuxzacykxw1myhoiduonu0xgqb' );
define( 'NONCE_SALT',       'hf3ndjjklk4not2rhbbp881j5grwlkbbxsnntqeq6upeysvxx7jcw8iusoxkwm4t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wple_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
