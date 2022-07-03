<?php
require_once './vendor/autoload.php';

use App\Routing\Route;
use App\Routing\Router;
use App\Controllers\HomeController;
use App\Controllers\NewsController;
use App\Application;

$router = new Router();
$router->addRoute(new Route('/', HomeController::class, 'index'));
$router->addRoute(new Route('/news', NewsController::class, 'list'));
$router->addRoute(new Route('/news/:id', NewsController::class, 'view'));

// $router->addRoute(new Route('/news', 'NewsController', 'index'));
// $router->addRoute(new Route('/news', 'NewsController', 'index'));
// $router->addRoute(new Route('/news', 'NewsController', 'index'));

$app = new Application($router);
$app->run();
