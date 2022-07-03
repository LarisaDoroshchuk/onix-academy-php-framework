<?php

namespace App\Controllers;

use App\View\Template;

class NewsController
{
    public function list(): Template
    {
        return new Template('list_news', []);
    }

    public function view(int $id): Template
    {
        return new Template('news', ['id' => $id]);
        // return 'news';
    }
}
