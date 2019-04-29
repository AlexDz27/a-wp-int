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
define( 'DB_NAME', 'ais_wp_int' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root1488' );

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
define( 'AUTH_KEY',         'N+m9[!C?oclV=S1Z)R1s(yP6?/}{?rMO_HSp|&GW3kznl8GZ~B P6N).{#$kM(+}' );
define( 'SECURE_AUTH_KEY',  'hvJ_RYBkIcDOa:aTKK{3fBf}@$J>AtA]Vg_)/eW}i~A#PhfA0,~0mccCtoTGat5<' );
define( 'LOGGED_IN_KEY',    'kh}Mzigar+HD~Urfn#QLelFivjpmpyoWVl$UFnEK<Yqq37r,d$%Ot%:-&xor-{yX' );
define( 'NONCE_KEY',        '/)%]z%4nGBF!e5wkgH@e7D_z{N5Ss8v<TmZ-qd+:YFM%WFI: [s;+a?sY4N,@S/:' );
define( 'AUTH_SALT',        '#wmt6p/}@3p$V2JKeg?:td_G>J0?:#A&*97F-L}}]XBiA|Te*lDQO55r)b2MHGkC' );
define( 'SECURE_AUTH_SALT', '[.{`Q(~X|m!x6m)EtXm0zRoE k78^apns3G9[>Mp7@q5:eX,iPXM*q2D#h&Pi>Je' );
define( 'LOGGED_IN_SALT',   ';G},p~dwzK?[;eMK*&a8f^~/Ym9t*O3_W9,1b:mJ[j@Vy,$[Y[VDj*{3;.!vtGD ' );
define( 'NONCE_SALT',       't{[8).u7KpNs[G=8&3`_=_Y1~APf[TwouRH:y7hRA{u:^tr!=S K%/k]SfNO<%`1' );

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
