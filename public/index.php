<?php
// All file paths relative to root
chdir(dirname(__DIR__));

require 'vendor/autoload.php';
session_start();


//$settings = require('app/boot/settings.php');

use Noodlehaus\Config;
$conf = Config::load('app/boot/settings.yaml');
$settings = $conf->get('settings', []);

// Instantiate Slim
$app = new \Slim\App(['settings'=>$settings]);


require 'app/model/Database.php';
require 'app/model/AuthService.php';


require 'app/boot/dependencies.php';
require 'app/boot/middleware.php';

// Register the routes
require 'app/src/routes.php';

$app->run();