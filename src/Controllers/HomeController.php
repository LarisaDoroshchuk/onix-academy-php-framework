<?php

namespace App\Controllers;

use App\View\Template;

class HomeController
{
    public function index(): Template
    {
        return new Template('home', []);
    }
}
