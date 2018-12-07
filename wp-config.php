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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'yM7jE-P ^BC]+B<H_&/5>U928kzE;fBokp2`Ps7R2d8Uwq_,8{Ke#@ (V0c[$Nu9');
define('SECURE_AUTH_KEY',  'd7dug&^a)=Q?zfKj?jdl/h=/ (P?o[:e%P>pBK1nj&_ug?mZ< Zur.FJJ4v 4&R<');
define('LOGGED_IN_KEY',    '2b,|O?<,%E[zW1JKdp.P!rBYt]!&;`$^w2uvh$S966]gU/0W(o%Sb|4ih9M,972 ');
define('NONCE_KEY',        'fQ#~i <R-mIQc@xTzw-}SZ/^m1DRaxf+]D><m5zybp#x-cun~f.<+ wX4i>bRH7!');
define('AUTH_SALT',        ' m=8ZtiUtvx052Lm>&lzJH*Lo(nWM?;.LtKpaD0U1n@ZbL-Ol=6:;4 xZ.csjo`n');
define('SECURE_AUTH_SALT', ';wd[ K43O&jz:tXTB3-AC4;$J1o<wPP-iX[=k]UP|/HWW6b|qh;oA>r2U&SI&:8#');
define('LOGGED_IN_SALT',   'j>NqOSgjWGBIe6O#{$quj`j0yZH%HM[_bOuE,ueWurCxh^cP-F`~]fi+ZO,h6;I,');
define('NONCE_SALT',       'f-nnyv]JIfl~6A{WTGx9}4Z9bVE+<W?dl0J4~mC`M($IkrbAIiA^C --$Ha-;SWd');

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
