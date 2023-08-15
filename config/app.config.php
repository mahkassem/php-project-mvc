<?php

define('LANG', $_GET['lang'] ?? 'en');
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('UTILS', ROOT . 'utils' . DIRECTORY_SEPARATOR);
define('CONTROLLERS', ROOT . 'controllers' . DIRECTORY_SEPARATOR);
define('MODELS', ROOT . 'models' . DIRECTORY_SEPARATOR);
define('ENTITIES', ROOT . 'entities' . DIRECTORY_SEPARATOR);
define('VIEWS', ROOT . 'views' . DIRECTORY_SEPARATOR);
define('STORAGE', ROOT . 'storage' . DIRECTORY_SEPARATOR);
