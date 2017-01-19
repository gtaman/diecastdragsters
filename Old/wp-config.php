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
define('DB_NAME', 'diecastd_wor9449');

/** MySQL database username */
define('DB_USER', 'diecastd_wor9449');

/** MySQL database password */
define('DB_PASSWORD', '6ZudgghD88Cv');

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
define('AUTH_KEY', 'u%!@xCjqxG<a&lp|RILr<T{^/@sM%kuwL*s<Zb=%{G&U@R/JJhr$N%VDNnfl_V?Bk{z{ge&vUlrECj!Ei^j>orcpYrkcTMgm/{gYkf]$;u&le/GHYxMdm!imN?;Xft>$');
define('SECURE_AUTH_KEY', 'ABxws(Y;ShB{C$_%/cPP@p_r!p=&iXgIOqBh<MXWm)|lv>vpAx$$YFFQJla;U!|WS?rRSGBWUqjO?vi/pG/j/F{g$Skx<McUnh]eyHARnqZ[HcfDxmDc{)SOgVtmxZAH');
define('LOGGED_IN_KEY', 'eUvFatTh%|Nyy-z_SLe}e=YE{qOldv]nkPA?}&@n;R!PhEySOZ-_BMnRP$rjdgTUA|%*k<+ZGu*)Td?ZNhFWnX(fZ[=c<%O]-En%Vn@LkqQP)DAQ^W]Z|Wtx(]pkLQpk');
define('NONCE_KEY', '+MK<IiNbgNbb&J$vHUZ[b%l^reZroEEU^OzdM@amFelts?JGm$$WLIn&LP!U=e^U[toZRhVOjH*_RkLy?D@x&KTVjXdf<H}{fZy&{BaWTb%rfc/Iga=/FtGhbZUil(B@');
define('AUTH_SALT', '}yYN(+-)tq}-*ApQ{->i>%g(>q{?Jdx}>wyFXYqnYl*CoRNZpais[zt>^P$yH}DLgfIISmBZ(]DCioxq!/lnR@dnj*TT?Z^Yky{MfxdutD*;ZWJuHcsZIne<!q!HcZnz');
define('SECURE_AUTH_SALT', 'z)?KP_DQH@)ng&AFo_C^+j;FImyWGdK$tZKauB$v/IkgMNcuoA{(Zt_Ra?EV_ecbt+b]woyc|A)u$L$Pm<fbipi-@cKlyNQQ/cJ@EJfHui%?>>&<ST[PfPtYL@elt{/)');
define('LOGGED_IN_SALT', 'bEsnozl/wfcjPpB|+)!/PGRryJoX{Jlduk=z[^x|V/$dJA]c{*+P=vsO-DTkNNB+nPH(kQ@W*|nQoM/YbTRzdXZwTQZEltMi!EYx|CQrR[UH%fPlOTbehN?ckFKDDs|k');
define('NONCE_SALT', 'Vjv;pBmD(DEv]q{*w%KJS+igc^ZXuk;>!_v^/lppe/ER=/+gur*z$pfXenx%;?!oJYvAkJ&GpCV^r&=j$Hxqx;o[$FNXJ|S%HQ]*%kx)ZMh(FMIE<Af=oOIX->+iu>q$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_oiae_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
