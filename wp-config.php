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
define('DB_NAME', 'broadcast');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x{NNOAV:fWt~!|i-hXZCWb%8vIH5lrfbic`2hI|#XYf&VsE5$zdvxfpb8d2/u5s`');
define('SECURE_AUTH_KEY',  '7aeojlHM+HOK#EOF/(zq;%#}?G=VHVBiY21 kaTP&kU>hzINM]uqq!qr6{Z8;!$e');
define('LOGGED_IN_KEY',    '?Qs:cv,U#E=<]<GGQ3`$24Wo-qAoWoP{I-@EXc%^:[gQ.YPs6I:N($%oVsj88}^l');
define('NONCE_KEY',        'HW ~GfqiAWA>MOI9ZRCx1{d`9 k85 bmL3I18p=m!^:n-z.|FHh(vc#U$!]L~,r;');
define('AUTH_SALT',        'O2,y7@APFeG^I6[he|yN?9>RIV){QQQ.9JIelLdtOo!}c$&N:pq;*_2u*R8kN6|K');
define('SECURE_AUTH_SALT', 'ZcvttBG(Ox_*-+~V3,)0kvOL596Wm[ifkceAFM^1~I7>aOAkeTO]fX3%_B`bY:ux');
define('LOGGED_IN_SALT',   'qyH|75K&l;C]Oq:$}jSjY(0mbv|HL_2(ff6]J[l3=KM}|&|:$>Tw|K,_5OCKKQy2');
define('NONCE_SALT',       ';Ckv(Bjo)Kn-F+mA_qN`CBw,(N a^U+aJUHJ>!08cvS[nxN%ijx]pIRsPYp4pqSg');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
