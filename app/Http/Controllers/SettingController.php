<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Investment;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function open_auction()
    {
        $this->mature_investments();
        //Select All Market Place orders which are pending and set status to 1
        Auction::where('status', 2)->update(['status' => 1]);
        //Set open market to status 1        
        return Setting::findOrFail(1)->update(['auction_status' => 1]);
    }

    public function close_auction()
    {
        return Setting::findOrFail(1)->update(['auction_status' => 0]);
    }  

    public function mature_investments()
    {
        //Select All Investments with Due date passed and status 101 set to status 1
        $matured = Investment::where('due_date','<=', now())->where('status', 101);
        $this->put_on_auction($matured->get());
        return $matured->update(['status' => 0,'balance'=>0]);  
    }
    protected function put_on_auction($investments){
        try {
            DB::beginTransaction();
            foreach ($investments as $investment) {
                $auction = new Auction();
                $auction->amount            = $investment->balance;
                $auction->balance           = $investment->balance;
                $auction->bank_detail_id    = ($investment->user->bank_details->first())->id ?? "";
                $auction->investment_id     = $investment->id;
                $auction->user_id           = $investment->user_id;
                $auction->ipaddress         = request()->ip();
                $auction->save();                
            }
            DB::beginTransaction();        
        }catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }             
    }

}
