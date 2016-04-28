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
define('DB_NAME', 'wordpress');

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

/** evitar ftp */


/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '@r|=WwnKwrx*h|np1U0r<*^%=O49|u+30|tfB-7eyf0r^w^MkgGe+MGQ-|2=vAPO');
define('SECURE_AUTH_KEY', '[O[<Szq3=.Hb:8Q=EM!E]Nzc%UQqAs!CfD)o|8,O#9ofLJd|)ViV8?mc+uySpJt(');
define('LOGGED_IN_KEY', 'SOaGyuCD<F@G$&|-<Uup{wNQz>1ehEf>Okfz:-<W1d>x`Sy@j{Y:pGG4=X|I[K^H');
define('NONCE_KEY', 'EAO#7*PCnMwbx&S~3-K%SXmG-8OEOS5`#yegOa{y#nOxuEuj7$;wDd+:r+z-j:&?');
define('AUTH_SALT', 'w+I_<!5J|^d7yc|M/Cb0-<Tc.;n-AA,8NGlwxRH09|Rl@??Gyv5<-bOrNxn_<Y|g');
define('SECURE_AUTH_SALT', 'ai-dLTNbuP!P(}&$]>~94!#yn0,qfIH_/HjV)rV,9x+l(-<&bN+0]kT%hh!^x7UG');
define('LOGGED_IN_SALT', ']5S4zW5@enZ$w-~kI/z3K=9QIJERd{ZT+,N!ZZX$*.$|9{;GXJ{}rGGyVEV_|v&+');
define('NONCE_SALT', '9`sl%6Q-+{.Gh`YHRryMv6+#UWt6I_zfX7](;?)i_8HrGr2}{]}F(HrIqw*8PPRL');

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
