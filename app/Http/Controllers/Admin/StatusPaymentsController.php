<?php

namespace App\Http\Controllers\Admin;

use App\Models\StatusPayment;
use App\Http\Requests\StoreStatusPaymentsRequest;
use App\Http\Requests\UpdateStatusPaymentsRequest;
use App\Http\Controllers\Controller;

class StatusPaymentsController extends Controller
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
     * @param  \App\Http\Requests\StoreStatusPaymentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusPaymentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatusPayment  $statusPayments
     * @return \Illuminate\Http\Response
     */
    public function show(StatusPayment $statusPayments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatusPayment  $statusPayments
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusPayment $statusPayments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusPaymentsRequest  $request
     * @param  \App\Models\StatusPayment  $statusPayments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusPaymentsRequest $request, StatusPayment $statusPayments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatusPayment  $statusPayments
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusPayment $statusPayments)
    {
        //
    }
}
