<?php

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__.'/.env'));
$dotenv->load();

require 'app/libs/Dev.php';

use core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

$router = new Router;
$router->run();
//phpscan_auth_token
//337|O1MZsDIpKcpDfs2i3JMiEtqI28ZCzZRDbZP9doed5985a50a