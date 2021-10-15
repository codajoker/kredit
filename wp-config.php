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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'kredit' );

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
define( 'AUTH_KEY',         'n^Dhw-XcP/O_ln(N3dgJUpE:it:+GPrDa~A{QGV&kd|MIWe!*(k#FGD(wH{+<Fv[' );
define( 'SECURE_AUTH_KEY',  'q2=<SpDTABluSeeE}nluLVr*QdXM:tBK0kvA!f3QH@obx(q!edDYHBI-|wH<t}2/' );
define( 'LOGGED_IN_KEY',    '~mX_Hd_)KRBS>lgXJnlb?~Y!3qW@vlnw/_Mu`Q%*{zkgNzTz/b|}f4Hw1Fo12P ?' );
define( 'NONCE_KEY',        'a.iMOwK 9P`:j=[]UE.tBM3q_]<t5Y41lYhz9-2LyI](je|G=f/xS=TvEevm3ab!' );
define( 'AUTH_SALT',        'sY~RW/:ir%c#],Aa<+se<SV:HTm&xt`n:H`D4G!av$(3AIJ3$hrK8[Z~~^+adB-B' );
define( 'SECURE_AUTH_SALT', '?kzK%R$=cNxpyc}y`)B)VujxzFp9c(Ak<e#edE6x,D_mJD5B%sLjncl^hifq^W]T' );
define( 'LOGGED_IN_SALT',   '4R_Xy 9Ld}wRZ2=ko:z8[jre2DH >?9V/|@)PH0g#{J+}U?p@J^C5A/;6lYVEFD%' );
define( 'NONCE_SALT',       'W36HjrkPnkM$G-Jo:~+w7Q]QnL=B$uqcl*I*h-p3>U}WcE+!iXm@ZnqDF[N3E#9q' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
