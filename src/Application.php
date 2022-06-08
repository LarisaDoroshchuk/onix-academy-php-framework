<?php
namespace App;
use App\Routing\Route;

class Application
{

    private static $url;

    public function __construct(private Route $route) {
        $this->url = $_SERVER['REQUEST_URI'];
    }

    public function run() {
        
    }
}