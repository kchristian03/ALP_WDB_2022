<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct_SizeRequest;
use App\Http\Requests\UpdateProduct_SizeRequest;
use App\Models\Product_Size;

class ProductSizeController extends Controller
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
     * @param  \App\Http\Requests\StoreProduct_SizeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct_SizeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_Size  $product_Size
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Size $product_Size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_Size  $product_Size
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_Size $product_Size)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduct_SizeRequest  $request
     * @param  \App\Models\Product_Size  $product_Size
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct_SizeRequest $request, Product_Size $product_Size)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_Size  $product_Size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_Size $product_Size)
    {
        //
    }
}
