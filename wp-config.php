<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'homeylyu_wp27' );

/** Database username */
define( 'DB_USER', 'homeylyu_wp27' );

/** Database password */
define( 'DB_PASSWORD', ')5@8@p8D[1F-57ZS' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ncxbp5izqgquox5yt5i6jgo1gxctxfikzizzvtipjt4cksqlhapmzpb8a9on4wsh' );
define( 'SECURE_AUTH_KEY',  'lp4ybokfmcn7t9o4dpeymsp8whdenk3igs50ec7zwwxvc5p8vdqdjmzf0zssav8i' );
define( 'LOGGED_IN_KEY',    'ehi6pe5us2wrlebaqaglgvmfq8andyx0ynd4orw00kljjgfpdmvnqa8hkqozkuo5' );
define( 'NONCE_KEY',        'yoyrzuyytc5gasxsc8qowuedxrdvcrsjskfzzuoekh2zcpkooxzhztj0zflxihim' );
define( 'AUTH_SALT',        '4lh7yw4ivthakng35nqnmyqs1rbdt94dig7kxannkzbvqw1omg0vg1zzq8ntaxoq' );
define( 'SECURE_AUTH_SALT', '1ejqxpaoi5hpiiiazfq7kmnzg60tufhub8lsdetoenibu6tvmthvot2rttbujmcb' );
define( 'LOGGED_IN_SALT',   'knetfnidproid6giydamqn9en8yufapscnqlckyav7et7gqex4xiof3zma2g1n8g' );
define( 'NONCE_SALT',       'avvvjrty6tj83wh0q92vz84gweu6ad69s5ypsbdymbcjb09uqki7ztijdpyelwep' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgf_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
