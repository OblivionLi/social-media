<?php

namespace App\Http\Controllers;

use App\Models\UserMessages;
use App\Http\Requests\StoreUserMessagesRequest;
use App\Http\Requests\UpdateUserMessagesRequest;

class UserMessagesController extends Controller
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
    public function store(StoreUserMessagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserMessages $userMessages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserMessages $userMessages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserMessagesRequest $request, UserMessages $userMessages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserMessages $userMessages)
    {
        //
    }
}
