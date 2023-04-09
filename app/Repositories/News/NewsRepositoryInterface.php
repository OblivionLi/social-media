<?php

namespace App\Repositories\News;

interface NewsRepositoryInterface
{
    public function getById($id);
    public function getAll();
    public function getAllWithFilters(string $searchTerm = null, array $filters = null, int $limitPerPage = 9);
    public function create($data);
    public function update($id, $data);
    public function delete($id);
}
