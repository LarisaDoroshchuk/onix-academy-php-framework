<?php

namespace App\Routing;

class Route
{
    public string $pattern;
    public string $controller;
    public string $action;
    public function __construct($pattern, $controller, $action){
        $this->pattern = $pattern;
        $this->controller = $controller;
        $this->action = $action;
    }
}
