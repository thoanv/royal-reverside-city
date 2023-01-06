<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddressDelivery;
use App\Http\Requests\StoreAddressDeliveryRequest;
use App\Http\Requests\UpdateAddressDeliveryRequest;

class AddressDeliveryController extends Controller
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
     * @param  \App\Http\Requests\StoreAddressDeliveryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddressDeliveryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddressDelivery  $addressDelivery
     * @return \Illuminate\Http\Response
     */
    public function show(AddressDelivery $addressDelivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddressDelivery  $addressDelivery
     * @return \Illuminate\Http\Response
     */
    public function edit(AddressDelivery $addressDelivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAddressDeliveryRequest  $request
     * @param  \App\Models\AddressDelivery  $addressDelivery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddressDeliveryRequest $request, AddressDelivery $addressDelivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddressDelivery  $addressDelivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddressDelivery $addressDelivery)
    {
        //
    }
}
