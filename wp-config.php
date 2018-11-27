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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpress');

/** MySQL database password */
define('DB_PASSWORD', 'nojRoct9');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'D8zDY.r$r|YIV~UfE.$*|[k9V|W-&@wu}=SptXzrB w^SjlD|G#{$o8!<YQ?7vV]');
define('SECURE_AUTH_KEY',  '1foh|{#}2ll`S?^*PUP6e;g.cLUm|K)w=iTjd|:VJ}Fg%ZAZ>H]84p0}?;}j =-T');
define('LOGGED_IN_KEY',    '!HH)G7FhE]:c=e$LmVN8C+w|~0-O-LxR}fAZ<_FI%J8v-?b<&w~.q+-cW>Z@XRdq');
define('NONCE_KEY',        'ywNq+0hpw`<!KE.r[b Qzb#HITTDR|Za+F+z;s _j:kSja1oCI$+I;>?xT_2$2~l');
define('AUTH_SALT',        '0hh]{iz}7#i#./hWh4hYS>dQf=>Ef6E/sCbc[L+]|vRMZYvcr|i/plUO+<|0^N: ');
define('SECURE_AUTH_SALT', '|tET3@EFXq-LKMYR3y|V*TG%Z@x2.@ho/OTfZ+~^+Oy}JIcr]]X!`yl7qSGwap_i');
define('LOGGED_IN_SALT',   'n@U:CpNYm_65&m-[}k.m:[OQSw1z-[QG:]>1)F_kBsmE4YuPWJFovk+N0H#i#ahy');
define('NONCE_SALT',       '/T!{#R07t24y`r?>svv&sqxRrmLGnZ;[_z)W<E7#RV0Pa#Px){G1G+|u&KR*X^>}');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
