<?php
require_once './vendor/autoload.php';

use App\Routing\Route;
use App\Routing\Router;
use App\Controllers\HomeController;
use App\Controllers\NewsController;
use App\Controllers\LoginController;
use App\Controllers\SignupController;
use App\Controllers\ArticlesController;
use App\Application;

$router = new Router();
$router->addRoute(new Route('/', HomeController::class, 'index'));
$router->addRoute(new Route('/login', LoginController::class, 'index'));
$router->addRoute(new Route('/signup', SignupController::class, 'index'));
$router->addRoute(new Route('/articles', ArticlesController::class, 'index'));
$router->addRoute(new Route('/news', NewsController::class, 'list'));
$router->addRoute(new Route('/news/:id', NewsController::class, 'view'));

$app = new Application($router);
$app->run();
