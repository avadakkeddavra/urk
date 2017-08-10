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
define('DB_NAME', 'ukr');

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
define('AUTH_KEY',         'FJ{TLe5:TkiKaC tmL~WSm{AX6j7DKX^*RgN:h2r&J`rf+$Fw!4F)x9ax5{Uiq`R');
define('SECURE_AUTH_KEY',  'O^U=NEUoU[uYZlKmt-J%aZp)Tng|?=M1E5f:Wmex,Mj$[6v8]Z:WY-56Xq<3b!,)');
define('LOGGED_IN_KEY',    'Dk3F1$:H6s?Hr7,kvT-sObwTki,=sY0215Rh8Gr0GFa]<|l(1r<(ywTEnD&bkWfI');
define('NONCE_KEY',        't-U4,w.sAGR2)?T=Xug;#N?A=94vtan172>@*+s!T/GpPC1n2{U.X>>?f$e%IW4w');
define('AUTH_SALT',        '[!bQ4!?!WqyS^)uB0)}buj)}SH{69`o<O NTJ]r[i137vgds5bqr_z:fhr;(61vU');
define('SECURE_AUTH_SALT', '(T6AVI*]<K[p-2>6ERiYg= eyY%LT?:uVjPjlXyw{VAGrjQ 8M`O2*]*/dI4?4H<');
define('LOGGED_IN_SALT',   '~q))nO_{|b23?(wt )V.~TvF`uK7#1g:SApZa!(BR(()cB{^d/>&R>l`pkIUV2/{');
define('NONCE_SALT',       '4+KcE lZMBR~N0>hfbagbKL-jRdhAMs<K>gVg-IWiwJ**Cqmk>vt{5i)]y(>]@;D');

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
