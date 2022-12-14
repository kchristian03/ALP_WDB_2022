<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct_ReviewRequest;
use App\Http\Requests\UpdateProduct_ReviewRequest;
use App\Models\Product_Review;

class ProductReviewController extends Controller
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
     * @param  \App\Http\Requests\StoreProduct_ReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct_ReviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_Review  $product_Review
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Review $product_Review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_Review  $product_Review
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_Review $product_Review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduct_ReviewRequest  $request
     * @param  \App\Models\Product_Review  $product_Review
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct_ReviewRequest $request, Product_Review $product_Review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_Review  $product_Review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_Review $product_Review)
    {
        //
    }
}
