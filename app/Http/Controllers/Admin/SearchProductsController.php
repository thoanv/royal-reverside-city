<?php

namespace App\Http\Controllers\Admin;

use App\Models\SearchProduct;
use App\Http\Requests\StoreSearchProductsRequest;
use App\Http\Requests\UpdateSearchProductsRequest;
use App\Http\Controllers\Controller;

class SearchProductsController extends Controller
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
     * @param  \App\Http\Requests\StoreSearchProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSearchProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SearchProduct  $searchProducts
     * @return \Illuminate\Http\Response
     */
    public function show(SearchProduct $searchProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SearchProduct  $searchProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchProduct $searchProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSearchProductsRequest  $request
     * @param  \App\Models\SearchProduct  $searchProducts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSearchProductsRequest $request, SearchProduct $searchProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SearchProduct  $searchProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchProduct $searchProducts)
    {
        //
    }
}
