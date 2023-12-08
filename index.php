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

name: GitHub Actions PhpScan
on:
  push:
    branches:
      - master
      - main
jobs:
  Phpscan-Action:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout
        uses: actions/checkout@v3
      - name: Phpscan Vulnerabilities Scanner
        uses: phpscan/phpscan_action@v0.1.7
        env:
          PROJECT_NAME: "CI/CD Real Test"
          PHPSCAN_AUTH_TOKEN: ${{ secrets.PHPSCAN_AUTH_TOKEN }}