<?php

namespace App\Http\Controllers\Admin;

use App\Models\Origins;
use App\Http\Requests\StoreOriginsRequest;
use App\Http\Requests\UpdateOriginsRequest;
use App\Http\Controllers\Controller;

class OriginsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOriginsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOriginsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Origins  $origins
     * @return \Illuminate\Http\Response
     */
    public function show(Origins $origins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Origins  $origins
     * @return \Illuminate\Http\Response
     */
    public function edit(Origins $origins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOriginsRequest  $request
     * @param  \App\Models\Origins  $origins
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOriginsRequest $request, Origins $origins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Origins  $origins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Origins $origins)
    {
        //
    }
}
