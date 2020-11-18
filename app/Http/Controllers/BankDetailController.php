<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BankDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankDetailController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $bank_details = Auth::user()->bank_details()->get();

        $banks = Bank::all();
        return view( 'bank-detail', ['bank_details'=>$bank_details, 'banks'=>$banks] );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $request->validate( [
            'bank'              => 'required|integer',
            'account_number'    => 'required|max:255',
            'branch'            => 'max:30',
        ] );
        $payment_detail                     =   new BankDetail;
        $payment_detail->user_id            =   Auth::user()->id;

        $payment_detail->bank_id            =   $request->input( 'bank' );

        $payment_detail->account_number     =   $request->input( 'account_number' );
        $payment_detail->account_holder     =   $request->input( 'account_holder' );
        $payment_detail->branch             =   $request->input( 'branch' );

        $payment_detail->account_type       =   $request->input( 'account_type' );

        $payment_detail->ipaddress          =   request()->ip();
        $payment_detail->save();
        return redirect( '/bank-details' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\BankDetail  $bankDetail
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        $payment_detail = BankDetail::findOrFail( $id );

        $payment_detail->delete();
        return redirect('/bank-details');

    }
}
