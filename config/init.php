<?php

define("DEBUG", 1); // 0 - production mode, 1 - dev mode
define("ROOT", dirname(__DIR__)); // адрес корневой папки
define("WWW", ROOT . "/public"); // адрес папки public 
define("APP", ROOT . "/app"); // адрес папки app 
define("CORE", ROOT . "/vendor/wfm"); // адрес папки ядра фреймворка
define("HELPERS", ROOT . "/vendor/wfm/helpers"); // адрес папки с хелперами
define("CACHE", ROOT . "/tmp/cache"); // адрес папки с кэшем
define("LOGS", ROOT . "/tmp/logs"); // адрес папки с логами
define("CONFIG", ROOT . "/config"); // адрес папки конфига
define("LAYOUT", "ishop"); // лейаут по дефолту
define("PATH", "http://new-ishop.loc"); // адрес приложения
define("ADMIN", "http://new-ishop.loc/admin"); // адрес админки
define("NO_IMAGE", "uploads/no_image.jpg"); // адрес картинки по дефолту

require_once ROOT . "/vendor/autoload.php";
