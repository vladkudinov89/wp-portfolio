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
define('DB_NAME', 'wp-portfolio-db');

/** Имя пользователя MySQL */
define('DB_USER', 'wpuser');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'asutpdp3');

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
define('AUTH_KEY',         '&@e$P|;gJ43z~7N_Z,>N9()72AnUBg`LIPlClb11Y2M1eb/yJ<^|/Kb4uYg/BP|,');
define('SECURE_AUTH_KEY',  'V{cJ$-!5(8axTJ oo:UPM,,p)_O%0Cp};[r 7TbYA|rg*$}@S7,*T/68(zIcYpck');
define('LOGGED_IN_KEY',    '}^@?dxvx_YCGyqILv:M[Z*4#B2#l{Svk(X,E~b=S4<-U&,aSKKYVo6]MLz/I#2,]');
define('NONCE_KEY',        '4<E9HZ+d`krdpbzB[Fd0ibLoi74KcDjI3pU!LerO:jXF*GrqbTP;nkw*c*%<]#C{');
define('AUTH_SALT',        'Ty)yKl].6)8Cxii?$:w]jOH-*A~3UpV*4}W?-$A`:rKCPw~dK3n$2J:S}g{oHW*0');
define('SECURE_AUTH_SALT', '`tJ[h>48AYXqai^Ki)0A3<XveWoD1sGUrxV+XghXt~h8Szo:4-jd5-S%NJI]AFY_');
define('LOGGED_IN_SALT',   'zd::,eob8>^>abNH(fN[;UbvJKwT?K,jgNPsSh_&}n[C7F/[o~M|61+wmUSWzcT_');
define('NONCE_SALT',       'DEPsnnzkj`coje gmIBWm6&=n|N|dT,OUCGLyt?6b;O+Za)-nz0dg3H|7h)ij5)|');

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
