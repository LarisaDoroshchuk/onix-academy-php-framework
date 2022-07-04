<?php

namespace App\Controllers;

use App\View\Template;
use App\Models\News;

class NewsController
{
    public function list(): Template
    {
        $news = News::all();
        return new Template('list_news', ['news' => $news]);
    }

    public function view(int $id): Template
    {
        $news = News::find($id);
        return new Template('news', ['news' => $news[0]]);
    }
}
