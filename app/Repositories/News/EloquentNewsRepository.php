<?php

namespace App\Repositories\News;

use App\Models\News;

class EloquentNewsRepository implements NewsRepositoryInterface
{
    public function getById($id)
    {
        return News::find($id);
    }

    public function getAll()
    {
        return News::all();
    }

    public function create($data)
    {
        return News::create($data);
    }

    public function update($id, $data)
    {
        $news = News::find($id);

        if (!$news) {
            return false;
        }

        return $news->update($data);
    }

    public function delete($id)
    {
        $news = News::find($id);

        if (!$news) {
            return false;
        }

        return $news->delete();
    }
}
