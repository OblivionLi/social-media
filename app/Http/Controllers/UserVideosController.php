<?php

namespace App\Http\Controllers;

use App\Models\UserVideos;
use App\Http\Requests\StoreUserVideosRequest;
use App\Http\Requests\UpdateUserVideosRequest;

class UserVideosController extends Controller
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
    public function store(StoreUserVideosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserVideos $userVideos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserVideos $userVideos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserVideosRequest $request, UserVideos $userVideos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserVideos $userVideos)
    {
        //
    }
}
