<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdressRequest;
use App\Http\Requests\UpdateAdressRequest;
use App\Models\Adress;
use Illuminate\Support\Facades\Auth;

class AdressController extends Controller
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
     * @param  \App\Http\Requests\StoreAdressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdressRequest $request)
    { 
        
        
        
        
        
        $this->validate($request, [
            "adressname" => 'required|string|max:155',
            "fulladress" => 'required|string|max:155',
            "adressdesc" => 'required|string|max:155',
            "adresscity" => 'required|string|max:155',
            "adressprovince" => 'required|string|max:155',
            "adresszip" => 'required|string|max:155',
        ]);

        Adress::create([
            "user_id" => Auth::user()->id,
            "adress_name" => $request->adressname,
            "city" => $request->adresscity,
            "state" => $request->adressprovince,
            "description" => $request->adressdesc,
            "full_street_adress" => $request->fulladress,

            "postal_code" => $request->adresszip,
        ]);

        return redirect('/my-account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function show(Adress $adress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function edit(Adress $adress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdressRequest  $request
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdressRequest $request, Adress $adress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adress $adress)
    {
        //
    }
}
