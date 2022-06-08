<?php
namespace App\Routing;

class Router
{
    public array $routes = [];

    public function addRoute(Route $route) : void
    {
        $this->routes[] = $route;
    }
}
