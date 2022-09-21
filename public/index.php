<?php
require_once __DIR__."/../vendor/autoload.php";

use Riki\Belajar\PHP\MVC\App\Router;

Router::add('GET','/','HomeController','index');
Router::add('GET','/Login','UserController','Login');
Router::add('GET','/Register','UserController','Register');
Router::run();