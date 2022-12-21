<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStore_FeedbackRequest;
use App\Http\Requests\UpdateStore_FeedbackRequest;
use App\Models\Store_Feedback;
use Illuminate\Support\Facades\Auth;

class StoreFeedbackController extends Controller
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
     * @param  \App\Http\Requests\StoreStore_FeedbackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStore_FeedbackRequest $request)
    {
        $this->validate($request, [
            "subject" => 'required',
            "feedback" => 'required'
        ]);

        Store_Feedback::create([
       
            "feedback_status" => "Unseen",
            "feedback" => $request->feedback,
            "user_id" => Auth::user()->id,
            "subject" => $request->subject,
        ]);

        return redirect('/contact')->with('Success', 'Feedback Sent');
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store_Feedback  $store_Feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Store_Feedback $store_Feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store_Feedback  $store_Feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Store_Feedback $store_Feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStore_FeedbackRequest  $request
     * @param  \App\Models\Store_Feedback  $store_Feedback
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStore_FeedbackRequest $request, Store_Feedback $store_Feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store_Feedback  $store_Feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store_Feedback $store_Feedback)
    {
        //
    }
}
