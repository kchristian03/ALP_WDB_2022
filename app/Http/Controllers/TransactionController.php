<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Adress;
use App\Models\Cart;
use App\Models\Cart_detail;
use App\Models\Transaction;
use App\Models\Transaction_Detail;

class TransactionController extends Controller
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
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionRequest $request)
    {
        $itemuser = $request->user();
        $itemcart = Cart::where('user_id', $itemuser->id)
                        ->first();
       
         $cartdetails= Cart_detail::where('cart_id', $itemcart->id)->get();  
            


            
        // if ($itemcart) {
            $itemalamatpengiriman = Adress::where('user_id', $itemuser->id)
                                                    ->first();
            // if ($itemalamatpengiriman) {
                // buat variabel inputan order
                $inputanorder['user_id'] = $itemuser->id;
                $inputanorder['adress_id'] = 1;
                // $inputanorder['adress_id'] = $itemalamatpengiriman->alamat;
                $inputanorder['no_resi'] = "Pending";
                $inputanorder['bukti_pembayaran'] = "null";
                $inputanorder['payment_id'] = 1;
                $inputanorder['total_price'] = $itemcart->total_price;
                $itemorder = Transaction::create($inputanorder);//simpan order
                foreach ($cartdetails as $cd){
                    Transaction_Detail::create([
                        "price" => $cd->price,
                        "total_items" => $cd->price,
                        "total_harga" => $cd->price,
                        "product_size_id" => $cd->product_size_id,
                        "transaction_id" => $itemorder->id
                    ]);
                }
               
                // update status cart
                // $itemcart->update(['status_cart' => 'checkout']);
                return redirect('/index')->with('success', 'Produk berhasil ditambahkan ke cart');
            // } 
        //     else {
        //         return back()->with('error', 'Alamat pengiriman belum diisi');
        //     }
        // } else {
        //     return abort('404');//kalo ternyata ga ada shopping cart, maka akan menampilkan error halaman tidak ditemukan
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
