<?php

namespace App\Controllers;

use App\View\Template;

class LoginController
{
    public function index(): Template
    {
        return new Template('login', []);
    }
}
