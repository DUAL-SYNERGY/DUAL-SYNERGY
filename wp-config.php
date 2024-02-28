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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newbgmi' );

/** Database username */
define( 'DB_USER', 'sambhav' );

/** Database password */
define( 'DB_PASSWORD', '287277086' );

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
define( 'AUTH_KEY',         ']YS (J^] }k{Qo9FoRUtW7+LVTeqNL1a1FWBpp^=,F?F8SQ]DC59EA@csCpLcdq<' );
define( 'SECURE_AUTH_KEY',  'GF:{4E&rOl}AYtA#XPcz ]6}<*>7o,L[S fvXT_)RH @Y,@f9YG;0dSNQk8TC>n$' );
define( 'LOGGED_IN_KEY',    '5HkcugFu7R^b=}<]96nfk~QyK6jq&nA!`NQ7g= }`:3:6%,yA?G=x.aFZQnng@P%' );
define( 'NONCE_KEY',        'tF?zPqu!)xI1ACgiRvv#HK]c{>Qb}Gm#h@@IkcyewkT$4apfAw8|tHzmt,HBtb*v' );
define( 'AUTH_SALT',        '*4%4rax^v0NTpw^N<o-kLh]3)@2Y)>B9X?pYH[Y&.k|D{(+fh,9.*d]ehJL=Hx@~' );
define( 'SECURE_AUTH_SALT', '+A<XRhq:Z_<R= h)+`)vsKW!`YQx>1c=.=8gR/g%:FCbpWw7RwRM;.:dZ(orGC}b' );
define( 'LOGGED_IN_SALT',   '7iK3b8S7u;P36 @8MzOcvCOs4h;Y ^5#,OikvvKQKbVP8Av@$QS]fcZ{Mz?ahD%L' );
define( 'NONCE_SALT',       '95AJ$8#0zh$uA7=`AR1:&^7cL@Sz]!v~L&Z/#cgArv]-rcm~$WRJ4e<+|KDG(BAv' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
