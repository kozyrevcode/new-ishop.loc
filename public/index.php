<?php

use wfm\App;

if (PHP_MAJOR_VERSION < 8) {
    die('Необходима версия PHP >= 8');
}

require_once dirname(__DIR__) . '/config/init.php';

new App();

// echo App::$app->getProperty('pagination');
// App::$app->setProperty('test', 'test');
// var_dump(App::$app->getPropetries());
