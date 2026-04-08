<?php
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
define( 'DB_NAME', 'stratus' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'acoc3R#WaUpIZvNc~.W7`ctOTD ojb% ceR_i0bs>7JDxc]&U_@;S2>#cw;So*Z3' );
define( 'SECURE_AUTH_KEY',  'XUzh}tDOn8vZnUS}kbb:)~R7cQ3Ao#VcUe#5gJ<}PgRj8Qq2#H=BEFT3l#-*Hnwu' );
define( 'LOGGED_IN_KEY',    'Fo44EFz=F^fl)3(J>s#MW$uw12W`vnh7PRrVar7B0Hd4M8[&|Ew]J,h}tXmjKyE^' );
define( 'NONCE_KEY',        'J!,@g<f6$IfI6)l@MW^&[{P-*kCOBE8&1#k:@@hd${tmXnBqZ?nAP_|9,}jUxDu(' );
define( 'AUTH_SALT',        'NJuS%.#+3!3k`L)Q;cTj~xEBHr]zq$/_yWX8sT g/2VHc|g^i;b}Gw#Ymrz(=TcG' );
define( 'SECURE_AUTH_SALT', '?)glO3=:I3~)zqYf_9c |9` /:tq]L0_)XZ(u]=HJt_q0kz6/a45)?>k,&B!jhSf' );
define( 'LOGGED_IN_SALT',   'VlQ02<o7,M#%u*kZ;W$&q[E*l6da|DQ5>11Y6P1U]+{XpLN(5RK#%8r$qj:+:kpn' );
define( 'NONCE_SALT',       '$Z~pg_TWuIyp<Quo3mDq,P)r%Kd3c)YpsNO1)lkR qrJWy[{J*LiI+`V,Rg(W_rv' );

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
