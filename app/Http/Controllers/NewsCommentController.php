<?php

namespace App\Http\Controllers;

use App\Models\NewsComment;
use App\Http\Requests\StoreNewsCommentRequest;
use App\Http\Requests\UpdateNewsCommentRequest;

class NewsCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreNewsCommentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsComment $newsComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsComment $newsComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsCommentRequest $request, NewsComment $newsComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsComment $newsComment)
    {
        //
    }
}
