<?php
require 'vendor/autoload.php';

$router = new Franciscopavon\RouterMvc\Router(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$router->load();