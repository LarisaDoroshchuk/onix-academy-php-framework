<?php

namespace App\Controllers;

use App\View\Template;
use App\Models\News;

class HomeController
{
    public function index(): Template
    {
        $news = News::all();
        return new Template('home', ['listNews' => array_slice($news, 0, 8)]);
    }
}
