<?php
require_once './vendor/autoload.php';

use App\Routing\Route;
use App\Routing\Router;

$router = new Router();
$router->addRoute(new Route('/', 'HomeController', 'index'));
$router->addRoute(new Route('/pages', 'PagesController', 'index'));


// echo "<pre>";
// print_r($_SERVER['REQUEST_URI']);
// echo "</pre>";