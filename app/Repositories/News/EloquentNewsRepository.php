<?php

namespace App\Repositories\News;

use App\Models\News;

class EloquentNewsRepository implements NewsRepositoryInterface
{
    public function getById($id)
    {
        return News::find($id);
    }

    public function getAll(int $limitPerPage = 9)
    {
        return News::with(['user', 'category', 'likes'])->paginate($limitPerPage);
    }

    public function getAllWithFilters(string $searchTerm = null, array $filters = null, int $limitPerPage = 9)
    {
        $query = News::with(['user', 'category', 'likes']);

        if ($searchTerm) {
            $query->where('title', 'like', '%'. $searchTerm .'%')
                    ->orWhereHas('user', function($query) use ($searchTerm) {
                        $query->where('name', 'like', '%'. $searchTerm .'%');
                    });
        }

        if ($filters) {
            // if (isset($filters['category_ids'])) {
            //     $query->whereIn('category_id', $filters['category_ids']);
            // }
        }

        return $query->paginate($limitPerPage);
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
