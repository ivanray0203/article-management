<?php

namespace App\Repositories;
use App\Models\Article;

class ArticleRepository implements ArticleInterface {
    public function all()
    {
        return Article::get();
    }

    public function get($id)
    {
        return $id;
    }

    public function store(array $data)
    {
        return Article::create($data);
    }

    public function update($id, array $data)
    {
        return $id;
    }

    public function delete($id)
    {
        return $id;
    }
}
