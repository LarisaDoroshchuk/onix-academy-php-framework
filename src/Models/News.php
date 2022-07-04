<?php

namespace App\Models;

use App\Models\Author;
use App\Data\DataProvider;

class News
{
    public $id;
    public $title;
    public $date;
    public $src;
    public $short_news;

    public array $full_news = [];
    public Author $info_autor;

    public static function all()
    {
        $data = DataProvider::getInstance()->all();
        return self::getListModels($data);
    }

    public static function find($id)
    {
        $data = DataProvider::getInstance()->find($id);
        return self::getListModels($data);
    }

    private static function getListModels(array $data): array
    {
        $models = [];
        foreach ($data as $item) {
            $model = new News();
            $model->id = $item['id'];
            $model->title = $item['title'] ?? '';
            $model->date = $item['date'] ?? '';
            $model->src = $item['src'] ?? '';
            $model->short_news = $item['short_news'] ?? '';
            $autor = new Author();
            $autor->name = $item['info_autor']['name'] ?? '';
            $autor->src = $item['info_autor']['src'] ?? '';
            $autor->position = $item['info_autor']['position'] ?? '';
            $model->info_autor = $autor;
            foreach ($item['full_news'] as $news) {
                $fullNews = new FullNews();
                $fullNews->class = $news['class'] ?? '';
                $fullNews->content = $news['content'] ?? '';
                $model->full_news[] = $fullNews;
            }
            $models[] = $model;
        }
        return $models;
    }
}
