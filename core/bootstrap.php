<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

$app = [];
$app['config'] = require 'config/config.php';

require 'core/Router.php';
require 'core/Request.php';

$siteName = $app['config']['site']['name'];
$path = $app['config']['site']['path'];

/* TWIG */

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader,
    [
        'cache'         => 'compilation_cache',
        'auto_reload'   => true
    ]);


