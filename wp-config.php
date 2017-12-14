<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'tutodam');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '9V0S.}0qcAF~1qT4VTwn6rQY^x+Lkpg<j`4z;7KSsN /%9 z1a4QsgzTRJ~5|D:d');
define('SECURE_AUTH_KEY', '{qwP`c:hh$,C^PMINRSC5z`kq.-$4488VzGXul yw*1q/cE5!Wetwf%<+47N<3G[');
define('LOGGED_IN_KEY', 'C|&}Bx+3LULhcdQ>i(x;`<W!yyIbH&?|5)eU02iAo{9PaK,dYgB>(T>5po5=y^w`');
define('NONCE_KEY', 'Z;46#iNh>e$NE:}KCJh8TgX0{)-C.*;#RXR<8SbUbP$1p!/56TTSEh<_t-;ewfDx');
define('AUTH_SALT', '@#Ltk!`h0>oz.A:,7f$03C(96:DF!U)!o?l7n48=_c8Nhu)<.~?-*9[fAwsWJ]kI');
define('SECURE_AUTH_SALT', '@<mW5W;5%?fAQV]J(bcx./nVD,]P<[1!b5]lcJBmQ;v+#!hoLvR&}?P7Y4rps<bN');
define('LOGGED_IN_SALT', 'Hbu^{0&:L_ff!tEgXIs:Noz-^B@zehE3059.c1^/tD+H9V)AFmm.;Xzw82%`|g;k');
define('NONCE_SALT', '2^7H4k5gR)]t7?H*75ETqxVZeQ83)eQQ/DRH8[>7#%k=cR%dV`<ZI9y9/pfo$qbz');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

