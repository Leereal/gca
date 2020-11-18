<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index(){
        //Get Investments
        $investments = Auth::user()->investments()->where('status',0)->get();

        //Get Bids
        $bids = Auth::user()->bids()->where('status',0)->get();
        
        //Get Bonus
        $bonuses = Auth::user()->bonuses()->where('status',0)->get();

        //Get Auction
        $auctions = Auth::user()->auctions()->where('status',0)->get();

        return view('history',['investments'=>$investments, 'bids'=>$bids, 'bonuses'=>$bonuses, 'auctions'=>$auctions]);              
    }
}
