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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '^XlHYQTxM.F{9Yu`m!GL(G(Q0E!J6F.{R_1N@O!Vg$E.Wr^@w?X}x!tun ?Ao4K5' );
define( 'SECURE_AUTH_KEY',   '1%evH_O.U>2=/64I3%W?iaMq6%C1NC+gv_7x>r>]3~B6nrbc#z>0AUGX3Ivl]@tm' );
define( 'LOGGED_IN_KEY',     'zAoJSX~EkqwNtvRjeNvI`.^pgwAo2zOa#h#E1IJ2mi%jC<m:7p.9#V|a.hlGT$)A' );
define( 'NONCE_KEY',         'U$_W$s&G/!+%.0;3`:l`:aAK@Nm#PI|6NE6bs5j#5U^9leBo^tT,&/&;ahJqY<8P' );
define( 'AUTH_SALT',         'Vk-eztmgbOPVJ/}Y#WvalK!UGA<SmEnh5k3E~ZjXoQ5 j!!2%)s=S6zqsry+>N:h' );
define( 'SECURE_AUTH_SALT',  'W9qsd;$fn3T=cir)6}OpW,h~v=,[mx#5sq>Vs_|^nJ6OCl!v7Yq>R/m.;DYB%UuR' );
define( 'LOGGED_IN_SALT',    'T>(=f3nCPokK)$tUH~o$)V-d!0/Ak-hGU5bC?}2*V1*Q+O>C&fL7C)WAK)6,ocsM' );
define( 'NONCE_SALT',        'eeVXy};0}IGyWnGE{eg!OAiG]VWn9/A6R(s3D%1;yQ]s-%Sz/N5iT`g2h8,l3nU;' );
define( 'WP_CACHE_KEY_SALT', '(z4>V`tXB4w!K;}^3+p-eHJr]]8CAsH=U|t2LpWw}:DsMZYr|s rp!V*{)]6.)&9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
