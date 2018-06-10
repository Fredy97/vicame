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
define('DB_NAME', 'vicame');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'm;6`O bY$N%LeTfs 6eifk2Q>Iurp`*d,kNm4T?`;lut|6%pB] r`/&*V62X^d,O');
define('SECURE_AUTH_KEY', 'VkLI_8nKA*R=G!U$Tt@ )ON:{8My&$1)DBc<vwF6uSZUDU7c^c&yZm7x;NXPxhAt');
define('LOGGED_IN_KEY', 'k&cI%^ra`/tJ-o>XDd|P2*;Bm|;lvm(.(L!Z<Ow$}TEG@<@k_$Ol~2FoC7-:zulV');
define('NONCE_KEY', 'Hw7A+%_fVI&xg)wA$WnGDSPhX+KI3dNr)I6Qf6&NV`vS%TIN.grz*!;m8F^O~Ev=');
define('AUTH_SALT', 'm2<}=pv&`!P;2[XR,{yv9F]ak/`P- C2MMylOu&B8x%,b;>q~rc<vTUx}tR}I$WE');
define('SECURE_AUTH_SALT', 'K%#:mM4<4LU{+{~s{(o-yv@]0MU1sam|mZ}/8tc%N}a9QR=3VdwLJRS,I=B7Z7o>');
define('LOGGED_IN_SALT', 'pSmA+_ppy~mZ23:7j~5o_T#;muvKM4JE7L-c(DCy~9#6MdXkFL%!5AXDat~TtZI:');
define('NONCE_SALT', 'stQ;il:EmK}Py.sC:[6jMrdSMZS:K>RxI%%O+!vSz^2$4)IX(I=2|4RKI-_Iss&d');

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

