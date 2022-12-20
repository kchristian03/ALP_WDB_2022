<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCart_detailRequest;
use App\Http\Requests\UpdateCart_detailRequest;
use App\Models\Cart;
use App\Models\Cart_detail;
use App\Models\Product;

class CartDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreCart_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCart_detailRequest $request)
    {

        $this->validate($request, [
            'product_id' => 'required',
        ]);


        $itemuser = $request->user();
        $itemproduk = Product::findOrFail($request->product_id);
        // cek dulu apakah sudah ada shopping cart untuk user yang sedang login
        $cart = Cart::where('user_id', $itemuser->id)->first();
        
        if ($cart) {
            $itemcart = $cart;
        } else {
          
        }
        // cek dulu apakah sudah ada produk di shopping cart
        $cekdetail = Cart_Detail::where('cart_id', $itemcart->id)
                                ->where('product_id', $itemproduk->id)
                                ->first();
        $qty = $request->product_qty;// diisi 1, karena kita set ordernya 1
        $harga = $itemproduk->product_price;//ambil harga produk
        $subtotal = ($qty * $harga);
        // diskon diambil kalo produk itu ada promo, cek materi sebelumnya
       
        if ($cekdetail) {
            // update detail di table cart_detail
            $cekdetail->updatedetail($cekdetail, $qty, $harga);
            // update subtotal dan total di table cart
            $cekdetail->cart->updatetotal($subtotal);
        } else {
            $inputan = $request->all();
            $inputan['cart_id'] = $itemcart->id;
            $inputan['product_id'] = $itemproduk->id;
            $inputan['total_items'] = $qty;
            $inputan['price'] = $harga;
            $inputan['total_price'] = $subtotal;
            $itemdetail = Cart_Detail::create($inputan);
            // update subtotal dan total di table cart
            $itemdetail->cart->updatetotal($subtotal);
        }
     
        return redirect('/cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart_detail  $cart_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Cart_detail $cart_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart_detail  $cart_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart_detail $cart_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCart_detailRequest  $request
     * @param  \App\Models\Cart_detail  $cart_detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCart_detailRequest $request, Cart_detail $cart_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart_detail  $cart_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart_detail $cart_detail)
    {
        //
    }
}
