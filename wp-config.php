<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'wordpressdb');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', 'root');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'mariadb');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jAOeH`*`*5a<{um+(Be//Q`u|L@H3!h=}:o;MgCRTqG?hBd?V. rlYuzey7U#I4:');
define('SECURE_AUTH_KEY',  '6RT(.c37`]Z49>wX9]`w{THEy]p~MzA!FcScsm2I1wV*EQ6xq&8n4B7NMSI{G@d8');
define('LOGGED_IN_KEY',    'bB}F-#z`2b,g~jlVqQLU}`BjkKVEX(O2iI$EP^$?>Y9G&OVW:ya`W8WFSn+CH?~9');
define('NONCE_KEY',        'u-*U#,:;;dp?_h~&s]]#teEE8[/,gW@<{,=yL:w/^8H)X+dcal.{+Eui&~PCJF|#');
define('AUTH_SALT',        'I!o<&aO.`=t<ze3*YZxza;Q!4G!sW4J$Ypc^9Ly8EEA5,9nXwp42df*%^{|7OYcm');
define('SECURE_AUTH_SALT', '7x4|#EQx|!Ph2IPFa]OE#RKN*4wR/Bn3xBLfAPQ$ qSTa#u hQO2`D>~!W_;Q(&v');
define('LOGGED_IN_SALT',   'U*5?{!u<ZaiXlSfZFc>hc5JKI()Zdd-2e=5Rw8c[_++eeev!fYlSs{BZsH<VADbL');
define('NONCE_SALT',       'a?qcns]iYu[ZE<eSOxej,UW;>10=H>G2PsW*92]R3dim[+-l+]056Ydtq.g6_6zS');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
