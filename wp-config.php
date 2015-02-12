<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'b12_15109695_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'c1vb8jcwrr7yalc5tx1fp77xtihl7muk3qocmpxnz8qjwcrwmmp24ft4vr8062i4');
define('SECURE_AUTH_KEY',  'en8ufbihimevntma2z5lefujjcwivilnsdviwbmbsizme2hhngumauegyp4aqs8y');
define('LOGGED_IN_KEY',    '96apo1oouucbql9kqxfuxmsq0hkzpad6otz9jvgiq2a2tqradmlvwnnhmooeffzt');
define('NONCE_KEY',        '85dfbvdrhkhim7swi2y9cszg0g2v2ocrx9mo4lsrbgcktejs4jdrl7s3d1dcun2r');
define('AUTH_SALT',        'quypkuj6a86zr61tlqnt5s1eqhadehqifpd42pnkbth95tv8hrtazqoyjbo83dhy');
define('SECURE_AUTH_SALT', 'wokhkq57h2vfj79u6gmamktz49gwd4xjbfm2u3cxcdjuga2kbiyhrl0n7sdyckdd');
define('LOGGED_IN_SALT',   'permnp7a54jpwgxunqcuyjmdtjrrwhl4e9kshttebpzysliosk5wjsgylaeqn7s1');
define('NONCE_SALT',       'dnupi204e9snji7ug7mfru1gwwkpkvjnfhslbvlnxykzlnecd2ryuxhndtdxuxgp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');