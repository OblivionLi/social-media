<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Requests\News\IndexNewsRequest;
use App\Repositories\News\NewsRepositoryInterface;

class NewsController extends Controller
{
    private $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexNewsRequest $request)
    {
        $validated = $request->validated();

        $search = $validated['search'] ?? null;
        $filters = $validated['filters'] ?? null;

        return Inertia::render('News', [
            'news' => $this->newsRepository->getAllWithFilters($search, $filters)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return Inertia::render('NewsShow', [
            'news' => $this->newsRepository->getBySlug($slug)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
