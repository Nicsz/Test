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
define('DB_PASSWORD', 'password_here');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+oo!c@[2:Q}=SN:z+XB=L^D&:hjcB9CONumV=?1nE2E2.kZO}?E$ei%EpYn`zoIY');
define('SECURE_AUTH_KEY',  'q:2_|;>xN/j^I(vV}bh]}<<:Y(yH::6%Z8uTOKV6Z~Tr-Dl$A>BQ6OQMSgCVar/%');
define('LOGGED_IN_KEY',    'MMbL@C[q>Y*$%/3vx|~O)d?>I+y|:-*eLPb++&,Rj{KYF,Oc[opUndPik.q y]yA');
define('NONCE_KEY',        '+}[cP~>7g@1y(R6TnsgjUyF|&q_Ats;)`g B_@HS|xrIDh~Oqu}4p<Bg_b*u`Vmj');
define('AUTH_SALT',        '+3?|D>r]EtpW&Wnj[Jdqyh6t-)|Z$ `cTp{ 2C4NFg`(W4z2CuoPDG>oItLF$,GR');
define('SECURE_AUTH_SALT', 'q0l%qUD>a@?`4q&U7Fp+n5x6e#lX :Ej5/Z|i9tP8o4%0T7=+7>m:J^k?.i<?DMc');
define('LOGGED_IN_SALT',   '%30iHcBe*pCC-<aIdngnHy7zySlbJ[,pqbJzKeI)*oG.?*P;<<lGpc*@i{FAN:Z>');
define('NONCE_SALT',       'BG4DDzByQ]t<VyU8LdSp9j`+l/H[2~zE1.lb{5Dc#9 pJ;KVmxzt71<2/Ca<2Q||');

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
