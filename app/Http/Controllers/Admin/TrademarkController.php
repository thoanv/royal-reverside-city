<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trademark;
use App\Http\Requests\StoreTrademarkRequest;
use App\Http\Requests\UpdateTrademarkRequest;

class TrademarkController extends Controller
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
     * @param  \App\Http\Requests\StoreTrademarkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrademarkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function show(Trademark $trademark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function edit(Trademark $trademark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrademarkRequest  $request
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrademarkRequest $request, Trademark $trademark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trademark $trademark)
    {
        //
    }
}
