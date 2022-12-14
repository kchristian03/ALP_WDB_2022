<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategory_ProductRequest;
use App\Http\Requests\UpdateCategory_ProductRequest;
use App\Models\Category_Product;

class CategoryProductController extends Controller
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
     * @param  \App\Http\Requests\StoreCategory_ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory_ProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category_Product  $category_Product
     * @return \Illuminate\Http\Response
     */
    public function show(Category_Product $category_Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category_Product  $category_Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_Product $category_Product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategory_ProductRequest  $request
     * @param  \App\Models\Category_Product  $category_Product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory_ProductRequest $request, Category_Product $category_Product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category_Product  $category_Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_Product $category_Product)
    {
        //
    }
}
