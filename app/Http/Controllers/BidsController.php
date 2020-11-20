<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bids;
use App\Models\Bonus;
use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $bids = Auth::user()->bids()->where('status','=',2)->get();

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
        $request->validate([
            'balance'             => 'required|max:10|between:0,99.99|',
            'amount'              => 'required|max:10|between:0,99.99|lte:balance|gt:0',
            'auction'             => 'required|integer',  
            'plan'                => 'required|integer',
        ]);
        $user = auth()->user();      
        $min_amount = 250;
        $max_amount = 15000;
        
        $auction= Auction::where('id',$request->auction)->first();
        $auction_balance = $auction->balance;

        if($auction_balance < $request->amount)
        {
            return redirect()->back()->withErrors('No longer available');
        }

        //Get current users bids older than today
        $user_previous_unpaid_bids = $user->bids()->whereDate('created_at', '<', Carbon::today())->whereIn('status', [2, 101])->get()->count();

        //Get total offers for today
        $user_today_total = $user->bids()->whereDate('created_at', '=', Carbon::today())->whereIn('status', [2, 101])->get()->sum('amount');

        //Get count number of todays transactions for user 
        $user_today_bids = $user->bids()->whereDate('created_at', '=', Carbon::today())->whereIn('status', [2, 101])->get()->count();

        if ($min_amount <= $request->amount && $max_amount >= $request->amount) {
            //Check if user has offers not yet approved
            if ($user_previous_unpaid_bids > 0) {               
                return redirect()->back()->withErrors('Please pay your previous bids first');
            }
            // //Check if user has not exceeded maximum daily transactions
            if ($user_today_bids >= 3) {                
                return redirect()->back()->withErrors('Daily transaction limit reached');
            }
            // //Check if user has not reached daily limit
            if (($user_today_total + $request->amount) > $max_amount) {
                return redirect()->back()->withErrors('Daily transaction limit reached try smaller amount');
            }
            // //Check if remaining amount can be placed on auction again
            if (($auction_balance- $request->amount < $min_amount) && (($auction_balance - $request->amount) != 0) ) {
                return redirect()->back()->withErrors('Please take the whole amount on this lot');
            } else {
                try {
                    DB::beginTransaction();
                    $bid                          = new Bids;
                    $bid->amount                  = $request->amount;
                    $bid->auction_id              = $request->auction;  
                    $bid->bank_id                 = $auction->bank_detail->bank->id;              
                    $bid->plan_id                 = $request->plan;                    
                    $bid->user_id                 = $user->id;                   
                    $bid->expiration_time         = Carbon::now()->addHours(12);
                    $bid->ipaddress               = request()->ip();
                    $bid->save();

                    $balance = Auction::where('id',$request->auction)->first()->balance;
                    //Get auction and then reduce its value by amount offered by current user
                    $current_auction = Auction::findOrFail($request->auction);
                    if ($request->amount == $balance) {
                        $current_auction->balance -= $request->amount;
                        $current_auction->status   = 100;
                    } else {
                        $current_auction->balance -= $request->amount;
                    }
                    $current_auction->save();
                    DB::commit();
                    return redirect()->back()->with('message', 'Bid placed. Please make payment');

                } catch (\Exception $e) {
                    DB::rollback();
                    throw $e;
                }
            }
        } else {
            return redirect()->back()->withErrors('Amount must be between minimum and maximum daily limit');
        }
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

    public function make_payment(Request $request)
    {  
        $request->validate([
            'bid'                  => 'required|integer',
            'pop' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('pop')) {            
            $imageName = time().'.'.$request->pop->extension(); 
            $request->pop->move(public_path('images/pop'), $imageName);         

            $make_payment            = Bids::findOrFail($request->bid);
            $make_payment->id        = $request->bid;     
            $make_payment->pop       = $imageName;
            $make_payment->status    = 101;
            $make_payment->save();            
            return redirect()->back()->with('message', 'Payment done');
        }
    }
     
    public function approve(Request $request)
    {
        $request->validate([
            'bid'                  => 'required|integer',
        ]);

        //Get pending order with posted id
        $bid = Bids::where('id', $request->bid)->first();

        //Get package of the  pending order
        $plan    = Plan::findOrFail($bid->plan_id);

        //Get receiver details
        $receiver = User::where('id', $bid->user_id)->with('referrer')->first();

        // //Get referrer or upliner of the receiver
        // $referrer = User::where('id',$pending_payment->user_id)->with('currency')->first();

        // //Check if user was referred
        // $referrer   = User::find($pending_payment->user_id)->referrer_id;

        $amount = $bid->amount;
        $expected_profit = $amount + ($plan->interest / 100 * $amount);
        $balance = $expected_profit;

        //Take investment done today by pending order user(buyer)  and with the same package to join with the current one if any
        $investment  = Investment::where('user_id', $bid->user_id)->whereDate('created_at', Carbon::today())->where('plan_id', $bid->plan_id)->where('status', 101)->first();
        //If there was a valid investment done today of the same package from the same user then update it to have one investment
        if ($investment) {
            try {
                DB::beginTransaction();

                $investment->expected_profit += $expected_profit;
                $investment->amount += $amount;
                $investment->balance += $balance;
                $investment->save();

                if ($receiver->referrer_id > 0) {
                    //Add bonus
                    $referral_bonus                      = new Bonus();
                    $referral_bonus->user_id             = $receiver->referrer->id;
                    $referral_bonus->amount              = $bid->amount * 0.1;
                    $investment->bonus()->save($referral_bonus);
                }
                $approve_payment= Bids::findOrFail($request->bid)->update(['status' => 0]);
                DB::commit();
                return redirect()->back();
            } catch (\Exception $e) {
                DB::rollback();
                throw $e;
            }
        } else { // Create new investment
            try {
                DB::beginTransaction();
                //Add Investment
                $investment                          = new Investment;
                $investment->amount                  = $amount;
                $investment->description             = 'Peer to Peer';
                $investment->plan_id                 = $bid->plan_id;              
                $investment->user_id                 = $bid->user_id;               
                $investment->due_date                = Carbon::now()->addDays($plan->period);
                $investment->bank_id                 = $bid->bank_id;         
                $investment->ipaddress               = request()->ip();
                $investment->expected_profit         = $expected_profit;
                $investment->balance                 = $balance;
                $investment->save();

                if ($receiver->referrer_id > 0) {
                    //Add bonus
                    $referral_bonus                      = new Bonus();
                    $referral_bonus->user_id             = $receiver->referrer->id;
                    $referral_bonus->amount              = $bid->amount * 0.1;
                    $investment->bonus()->save($referral_bonus);
                }
                Bids::findOrFail($request->bid)->update(['status' => 0]);
                 DB::commit();           
                return redirect()->back();
            } catch (\Exception $e) {
                DB::rollback();
                throw $e;
            }
        }
    }

}
