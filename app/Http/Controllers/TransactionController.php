<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Adress;
use App\Models\Cart;
use App\Models\Cart_Detail;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Transaction_Detail;
use Illuminate\Support\Facades\Auth;

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

     public function showorderdetail(Transaction $transaction)
    {
        return view('users.orderdetail', [
            "pagetitle" => "Order Details",
            "maintitle" => "Order Details",
            "order" => $transaction,
            'products' => Product::all(),
            'orderdetails' => $transaction->transactiondetails


        ]);
    }

    public function selesai(StoreTransactionRequest $request)
    {

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
        $this->validate($request, [
            "bukti_pembayaran" => 'required|image',

        ]);

       $adressid = $request->adressname;

        $cart = Cart::where('user_id',Auth::user()->id)->first();
        $cartitems = Cart_Detail::where('cart_id',$cart->id)->get();
        $adress = Adress::all()->first();
        $tr = Transaction::create([
            "user_id" => $cart->user_id,
            "adress_id" => $adress->id,
            "no_resi" => "-",
            "bukti_pembayaran" => $request->file('bukti_pembayaran')->store('paymentphoto','public'),
            // "bukti_pembayaran" => "",
            "payment_id" => 1,
            "total_price" => $cart->total_price,
            "transaction_status" => "Menunggu Konfirmasi",
            "adress_name" => $request->adressnamee,
            "postal_code"  => $request->postal_code,
            "city"  => $request->city,
            "state"  => $request->state,
            "description"  => $request->description,
            "full_street_adress"  => $request->full_street_adress,


        ]);

        foreach($cartitems as $ct){
            Transaction_Detail::create([
                "transaction_id" => $tr->id,
                "price" => $ct->price,
                "total_items" => $ct->total_items,
                "total_harga" => $ct->total_price,
                "product_id" => $ct->product_id,
            ]);

            $items = $ct->total_items;

            $ct->product->minstock($items);
            Cart_Detail::where('id',$ct->id)->first()->delete();

        }
        Cart::where('user_id',Auth::user()->id)->first()->clear();
        return redirect('/my-account');

    }

    public function adressing(){

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
//        $this->validate($request, [
//            "orderid" => 'required|int'
//        ]);
    Transaction::where('id',$request->orderid)->transaction_status = "Selesai";
        // $transaction->transaction_status = "Selesai";
        return redirect('/my-account');
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

    public function seecheckout()
    {      $cart= Cart::where('user_id',Auth::user()->id)->first();
        $cartdetail = Cart_Detail::where('cart_id',$cart->id)->get();
        $adress = Adress::where('user_id',Auth::user()->id)->get();
        $products= Product::all();
       $payments = Payment::all();
        if($cartdetail->count() >0){

            $haveaddress = false;
            $id = 0;
            if(isset($_GET['adressname'])){
                $haveaddress = true;
                $id=$_GET['adressname'];
                $selectedadress=  Adress::where('id',$id)->first();

                return view('users.checkout', [
                    'cartdetails' => $cartdetail,
                    'cart' => $cart,
                    'products' => $products,
                    'adresses' => $adress,
                    'payments' => $payments,
                    'selectedadress' => $selectedadress,

                ]);
            }


   else{

    $selectedadress=  $adress->first();

    return view('users.checkout', [
    'cartdetails' => $cartdetail,
    'cart' => $cart,
    'products' => $products,
    'adresses' => $adress,
    'payments' => $payments,
    'selectedadress' => $selectedadress,

]);}
         }









         else{
            return redirect('/products');

         }
    }
}
