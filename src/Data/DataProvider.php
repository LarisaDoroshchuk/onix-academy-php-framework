<?php

namespace App\Data;

class DataProvider
{

    private static $instance = null;

    // private static $data = [];

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new DataProvider();
        }

        return self::$instance;
    }

    private function getData()
    {
        return include('news.php');
    }

    public function all(): array
    {
        return $this->getData();
    }

    public function find(int $id): array
    {
        $data = $this->getData();
        return array_filter($data, function ($i) use ($id) {
            return $i['id'] == $id;
        });
    }
}
