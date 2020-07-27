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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'S1G5f@EvW(xyIi0[M=&[_f4AeKfXr=-:bGJ].3KsH! y~@4h-{bYo}:a;t|6|`P<' );
define( 'SECURE_AUTH_KEY',   '=A<MS7d%6NOy,~hW/-o@h]7dU*6M-cQRnM8)K<;5I1cFuqR/4Yud7VWSIQdL|.3/' );
define( 'LOGGED_IN_KEY',     '*(_UK$.np%C=J4{RLhR+4+^`.W+w%^iM|TMC`YpX Btr^BL&hY<Ek^9aJ-fs`-_b' );
define( 'NONCE_KEY',         ',X~jJXIL/~!RmbPCDik^7p0%qq%<H5Q:{+XJe1kx=`$DZbNl1^0$qB9ph,:`p?mj' );
define( 'AUTH_SALT',         's&BV?HmN/Q!e-^g1d@x/Lb!zMI?|f.rKhh[,pKd&+6h..=F}0|i;)d33^#TR3HK&' );
define( 'SECURE_AUTH_SALT',  '<ThT<ueh=f]H]T&_ohA>H,<GM4Ox8bLe@#8BZze<gI()%5=LAd>C]bV}bXKKCF00' );
define( 'LOGGED_IN_SALT',    'AK$-lAzO|oPM8Itp@f.NM-&N^P.f9/81ws!BlmE~_#CxW7!$vqbpEPnU:]M/=*mD' );
define( 'NONCE_SALT',        'gVQJU!A!*bGl,AIt<D@9cB?>-l`r;F1X<h|ia`Vmb]x;q&D8hJct.L|(1yJuU-_#' );
define( 'WP_CACHE_KEY_SALT', 'g=kJw7$Nvz4p^wPM KD-rD+.Rq1SQ(n-Q./xJdSlS`>!x-u<GG;XH2yWKA -CG|3' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'FORCE_SSL_ADMIN', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
