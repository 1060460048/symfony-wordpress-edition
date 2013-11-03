<?php

//TODO: set database
define('DB_NAME', '');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1'); //alpha DB
//define('DB_HOST', '212.13.212.66'); //beta/gamma DB

//uncomment the 'if' when we go live
//if (strpos($_SERVER['HTTP_HOST'], 'beta.gd') && !empty($_COOKIE['access_beta'])) {

//auto siteurl for alpha/beta
$_SERVER['DOCUMENT_ROOT'] = str_replace($_SERVER['SCRIPT_NAME'], '', str_replace(DIRECTORY_SEPARATOR, '/', $_SERVER['SCRIPT_FILENAME']));
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] .
		str_replace(DIRECTORY_SEPARATOR, '/', str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', dirname(__FILE__))));
define('WP_HOME', WP_SITEURL);

//debug settings
define('WP_DEBUG', true);
define('SAVEQUERIES', false);

//allow filesystem access
define('FS_METHOD', 'direct');

//}

//enable caching plugin
//define('WP_CACHE', false);

$table_prefix = 'wp_';

//move WP uploads directory out of wp-content
define('UPLOADS', 'data');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('WPLANG', '');

//generate new keys at https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY', '0M-?DG!;lT0,cE0|q{0&RLDlCxo,+z6.nsf-:fYyv`JsRE52ygp,>kWP<+Eh|Hd');
define('SECURE_AUTH_KEY', '}Q+kOzX$&M@_l%h.G<dI6J~.i@P%%X+}Bq!c4paCgA0_E|9PU_GY7WZB+aTu={4m');
define('LOGGED_IN_KEY', 'i&&Kd`etda%7y(-=.x;xK|_g6nQ)],p,c&hgv#V}c+u6,oSqVT.$ruNMivkg@.,');
define('NONCE_KEY', ')5[&oIp|jKbyE2W)r1n?p/l!]jaS#Pu4Flz(a~x)BYhaot0!<:cSqFr-I~8Q$[T!');
define('AUTH_SALT', '@d2R`S&,yM1{U;qkfY0w%+/M{@BBJ}ge,t,[iSS.B-2cAdha:vjaB<h1|, &+~$g');
define('SECURE_AUTH_SALT', '0{yUGv%/fs(zNdXdpZS,p/Y%8x*<#/mU.WN{;[Y+X#GV?zM:IC*JG-!Aa!/X> ');
define('LOGGED_IN_SALT', '||#uILO00gNH1HFL8DIu7$]we>MLLZ[CuJ$K*htr,H3c+Rki?dF+vj.H$|?Z[+}}');
define('NONCE_SALT', '$y?qE#7!<+A~-a[|&0slnil:&e:CRPi7t<Z?)=(YuO[zX:D/6D!|c<uN~Ivj{bO');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
