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
define( 'DB_NAME', 'wp_title' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'F%/Z)!NYvf5*;RQ=/9bqL?G^DSJu7I.cRl58}Ojq72k)ptxTOo_8hfraW5]8YCRg' );
define( 'SECURE_AUTH_KEY',  '-t.M&6+B!15B` wa),JWT[bmzMO2|slrz[OmYGH/eq7-]iSsniD.N/T<9|ni:/dD' );
define( 'LOGGED_IN_KEY',    '!! wYwDjU4&M?@MQgmOd9Ap+)Jl|ejSJ5yqES9hl=+*{#paE/HE548kZ60Dgtm*B' );
define( 'NONCE_KEY',        'aeotIg<JQ^[ZjO@S;?1/Lau!,RS|jr9x&9@g6!ba)Z3Ot6oCqfLu|q`]zkX4yXRu' );
define( 'AUTH_SALT',        'esy`|ZR7aNv$he?z$&%Yo lpj!]B7e}D]I6){0V,y_x#mBm?Q..R=?sVM.KTYW7V' );
define( 'SECURE_AUTH_SALT', 'Y]Mep#)3U:9->*oKfTQltAmWV+-ElV<{34T1@ZsI9DdJ]e5{y?~aQLl5>1};YV7x' );
define( 'LOGGED_IN_SALT',   '<l^(:=C:]eT1^zF#luF@?-:#&ZBBJLrJpGGV2oZOxN~y0[$!f!zQ<DB^(.Bn=SQW' );
define( 'NONCE_SALT',       'u;:}kuv=B0x32E2`QS}Rzj?19]jdk|9LNE#/EOrn{tL4UM_1#8DP:)>%d%kI@4(~' );

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
