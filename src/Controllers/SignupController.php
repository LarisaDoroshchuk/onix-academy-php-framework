<?php

namespace App\Controllers;

use App\View\Template;

class SignupController
{
    public function index(): Template
    {
        return new Template('signup', []);
    }
}
