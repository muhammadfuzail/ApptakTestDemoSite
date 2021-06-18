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
define( 'DB_NAME', 'apptakdemo1_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'v.7_K9+2tZ[LTAk 2_M!bO$!StCZ!d,XXXqsXS5?<~@tvD~,yg<Ni&(+ngEzCDQ7' );
define( 'SECURE_AUTH_KEY',  '(:@>Qqa>{ aP9.>Zbzq.%PEp)jWV/J}VEq;,Y=VHc|#i?Ta#RC+oE0z?Gj}WN]9_' );
define( 'LOGGED_IN_KEY',    ',IOL/?~2~Y|1VX8K8j!nFoF9}}bq8_ov!y{i`aa2uv:q1<Q`y VY}G~S*TmV=n/T' );
define( 'NONCE_KEY',        'B,d{&U.3Ms*mq*$7;0A@{Y.8VNC)]<HZbzOya!T*&J8|YaQdb=F;,m=O(Et!Lq_=' );
define( 'AUTH_SALT',        'aMvpce9*1u^fA]ts;nhAz.i>W+X/`_le/t`d-Z>v)Rhx4ce1C,IAk`hd!VF<+V}K' );
define( 'SECURE_AUTH_SALT', ',GW~v:/Eqi%ct:(;JUjYzrl2:Ymvap795gZD{QtZvB{Deqvs]zoYIVaqOz_1]Ph&' );
define( 'LOGGED_IN_SALT',   'R~PQps>Z9#V(qH@J;25$?7|HpRDFoSXV?hf>OtQqv6b 3LlEaMQ^34WD4|;yXz]?' );
define( 'NONCE_SALT',       '#sh:?XcR9f5jA&7N$a-1b~xNp1:_q}<ut$/3LMF3 FLf `h2F#mmU luOq#DVz2{' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
