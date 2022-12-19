<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.products' , [
            'pagetitle' => 'Products',
            'maintitle' => 'Products Page',
            'products' => Product::all(),
            'category' => Category::all(),
           
        ]);
    }

    public function show(Product $product)
    {
        // if (Auth::check()){
        // if (Cart::where('user_id', Auth::user()->id)->exists()) {
               
        //   }
        //   else{
        //    Cart::create([
        //     'user_id' => Auth::user()->id,
        //     'total_price' => 0
        // ]);
        //    }
        // }
        //menggunakan route model binding
        // $writer->load('books');

        //tanpa route model binding
        // Writer::find(1)->with('books')->get();
            // $product = Product::find($productid);
        return view('users.single-product', [
            "pagetitle" => "Product Details",
            "maintitle" => "Product Details",
            "product" => $product,
            'products' => Product::all(),
         
            
        ]);
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $products = Product::find($id);
    //     return view('products' , [
    //         'pagetitle' => 'products',
    //         'maintitle' => 'Products Page',
    //         'products' => $products
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
