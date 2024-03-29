<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaction_DetailRequest;
use App\Http\Requests\UpdateTransaction_DetailRequest;
use App\Models\Transaction_Detail;

class TransactionDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreTransaction_DetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransaction_DetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction_Detail  $transaction_Detail
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction_Detail $transaction_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction_Detail  $transaction_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction_Detail $transaction_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransaction_DetailRequest  $request
     * @param  \App\Models\Transaction_Detail  $transaction_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransaction_DetailRequest $request, Transaction_Detail $transaction_Detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction_Detail  $transaction_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction_Detail $transaction_Detail)
    {
        //
    }
}
