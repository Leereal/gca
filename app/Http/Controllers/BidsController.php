<?php

namespace App\Http\Controllers;

use App\Models\Bids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Bids
        $bids = Auth::user()->bids()->where('status','<>',0)->get();

        return view('bids',['bids'=>$bids]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bids  $bids
     * @return \Illuminate\Http\Response
     */
    public function show(Bids $bids)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bids  $bids
     * @return \Illuminate\Http\Response
     */
    public function edit(Bids $bids)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bids  $bids
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bids $bids)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bids  $bids
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bids $bids)
    {
        //
    }
}
