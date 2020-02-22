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
define( 'DB_NAME', 'alt-finance' );

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
define( 'AUTH_KEY',         'eITM-K_R_eR>`T}7;V:E6|V0(x`0N_)==g #J6U]=s=7M`[*3ew>R^V/q?dn3u}9' );
define( 'SECURE_AUTH_KEY',  'd>0ou>H,kuJra9v55/;b*Q>h1M!J2b#lM$V_f6s+#Sy.xoh8Z|v[;-MQy/wMnw^y' );
define( 'LOGGED_IN_KEY',    'm*p{D*z g!^iaao%}1JCG5~@bAxT{;|nmr [g38voth=U)p>9lex?oS^~;~IgEX,' );
define( 'NONCE_KEY',        '<f0Vc-y?t~m4tQbI8+fduG9nhB,[H&4CB*=:5wzJ0}l`]Q}cK_.GuBO(@`7,V{(}' );
define( 'AUTH_SALT',        '}_EfF.I}9F,/nL]0ei=aaN8%?t;r`<_L6(E0]RV@@M7>q|B&L=PG]X07~@b7|WA>' );
define( 'SECURE_AUTH_SALT', 'l?6Zo3MXbE|BI0twD{A)-B}jVBA/:1OK8e$UkI$a6BK)n2d?`(0,SORf$s|vtu9,' );
define( 'LOGGED_IN_SALT',   '6e=e8ac=mk+jiXO6^FSXEw5lblV2@uii1^Y(CciR>XckaoC?oLCwxn`Pr9zm_^J!' );
define( 'NONCE_SALT',       'bF^>L|z%H05z1Rl2*k c}r40v.D.LJ+,+NTtk$^es xF>=x+4$+Wq+6>`io%E~4f' );

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
