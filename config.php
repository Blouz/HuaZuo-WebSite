<?php
// HTTP
define('HTTP_SERVER', 'http://myhuazuo.com/');

// HTTPS
define('HTTPS_SERVER', 'http://myhuazuo.com/');

// DIR
define('DIR_APPLICATION', '/home/wwwroot/www.myhuazuo.com/catalog/');
define('DIR_SYSTEM', '/home/wwwroot/www.myhuazuo.com/system/');
define('DIR_IMAGE', '/home/wwwroot/www.myhuazuo.com/image/');
define('DIR_STORAGE', '/home/wwwroot/www.myhuazuo.com/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'mypassw0rd');
define('DB_DATABASE', 'HuaZuoDB');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');