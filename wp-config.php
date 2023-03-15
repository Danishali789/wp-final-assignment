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
define( 'DB_NAME', 'final-assignment-data' );

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
define( 'AUTH_KEY',         'gzr{V=zGO #24eXX! fVPK~HRd[uTOcVm4d0N|}k&ENVlaGY-4{z@J~RO.^)0W`B' );
define( 'SECURE_AUTH_KEY',  '2ERUY<zyqFezK{- a2Y LBbU%OJoIVBHz>$Eb xDdb9>O~bRxgNvIu6SfSfu$A~0' );
define( 'LOGGED_IN_KEY',    '.creyd*.hAsrpw<5IPt$3AB4#0%{gA:Va8my>F3@D[zFEs3cTm} 2NlWi5*!0tIH' );
define( 'NONCE_KEY',        '0,N?NjLANo4C#MJe&~~ut#3TA/rk?)2;+OI`Y+#Pl<rRyNHNzre+2Joo,y#L-=9}' );
define( 'AUTH_SALT',        's(=It[F9aAKxUMZHw2K`T;RTivZh5&v)Cmi4{pg<K.eFNxakd37S>Ag]K(9fv^*r' );
define( 'SECURE_AUTH_SALT', 'PHx=i#:+b/mBm_C.$fC>n$kZ3I!!;d`fHRFm{#D>KsuP!4{3[g^ab{yy/=:9/s$U' );
define( 'LOGGED_IN_SALT',   'eDaaOm3{?=To0CEU4%.?OGM3oGVj6>o9ExGX~-9jqeX..re2E_P4=6u=lL~=Rl])' );
define( 'NONCE_SALT',       'o9f6Lo/yhM26Ur[aCc]LCys`^%kSw!eiaFXt=>IbxR2^_^c!X4q}a)T_80f4y9pI' );

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
