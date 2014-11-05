<?php
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
define('DB_NAME', 'market_rtl');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%WhD>k7hIC E!g=2*~ R9|I88ug=i@~yRK=H+j$Ntjo5~a&_@F8o&*)+]3hW`TGi');
define('SECURE_AUTH_KEY',  'zyA<y)+|=@`skE&wusM{[}f;fJZep+Q;-&Wj9ijg:cqU+USP$(+Ood9$-Az=AQH#');
define('LOGGED_IN_KEY',    '4(d38:!b}FO.2gO17rwJELQnkRR4?_ulaz0$ :4{*$}/CWB#qg]iAa-UzxEJ4V%0');
define('NONCE_KEY',        '&[^T|HS;X=9Fq2fNy+aHr=R+-:ZzI&X)<+b,j5[pYh9w+L-{tQQ_zW& vKa,5BY3');
define('AUTH_SALT',        'rc:B&#?|-CjrU3-[1$@7&eQ^-dA|yCby-f7[[^{Yi|4/6dEiTl26;|YH6g@`E*ax');
define('SECURE_AUTH_SALT', '1Mg`rncC_)x.6$:k++DBE#%sne?jar9sZ+7zs$<qilZWB*kt>z*Iy:+N*~h+ir=G');
define('LOGGED_IN_SALT',   '?b~Kr+$4W-dFGl]~;1+for$Z-&L/cz%+|VyH5P!VESTyTOEc_H@>dd0O?|aH0Zv4');
define('NONCE_SALT',       'M6(:q,rIH|Vo|_ 2{+PM[{iM9}U!fS(TCH2!*^h1m c5-BieI!7-6GZy{bD-?< +');

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
