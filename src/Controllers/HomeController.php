<?php
namespace App\Controllers;

class HomeController {
    public function actionIndex(): string{
        return "<h1> Home page </h1>";
    }
}