<?php

namespace App\Controllers;

use App\View\Template;

class ArticlesController
{
    public function index(): Template
    {
        return new Template('articles', []);
    }
}
