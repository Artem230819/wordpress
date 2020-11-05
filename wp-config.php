<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7$u7?[=vV0W328(9OlL6{D9Z6g2T~*nUt!?mnK Mh_Ri$kzcKxMW)%C|(bv&Ho_r' );
define( 'SECURE_AUTH_KEY',  'xc=d,|W@hm:Ij78x)`H8v=}~N~#.931/OjFz8+PG1!BjNJpLbbBUU#I(O%_7~)Ku' );
define( 'LOGGED_IN_KEY',    '[vf/_I83l=g:F~)B]}2LM-nOj@*Y>gS,B/D vdgpb%Z(fa#&JKW(H`fFdWfXN09W' );
define( 'NONCE_KEY',        '*jlaXIvs,<mWz!.]gyYI!N 7 IE-Y&^q udQYYTJp[Jh}^_#kBA0n|;^S)g!=Zi=' );
define( 'AUTH_SALT',        ')b5oum3??{C~O_]LRtf*iuHa^zfSG_tWSueB^#cRF(xuXkfSZ8=#zhWpw]f5{|Zf' );
define( 'SECURE_AUTH_SALT', '0]Fk#/f]d}OubUV}XVI{3:smw_Q%ux{+&s}HCO8l+dQ!Q|G,qG< |%syso<nOk?[' );
define( 'LOGGED_IN_SALT',   '6l3&q4hA#3)jC3Ey0Q)?ilg0)bt[Y6QluR.)p8]VfG1}uB~Ok.M-4eIlV:f%ghAg' );
define( 'NONCE_SALT',       '=l/g-5}ZB5NOCqC9M^H/cI9N.Z}O<0%|Ju>=:kc&t$r#CMKr<_=U>[z3m1kJt}:T' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
