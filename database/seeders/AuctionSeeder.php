<?php

namespace Database\Seeders;

use App\Models\Auction;
use Illuminate\Database\Seeder;

class AuctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auction::create(['amount'=>'10000','balance'=>'1200','bank_detail_id'=>'1','investment_id'=>'1','user_id'=>'1']);
        Auction::create(['amount'=>'10000','balance'=>'250','bank_detail_id'=>'1','investment_id'=>'1','user_id'=>'1']);
        Auction::create(['amount'=>'10000','balance'=>'310','bank_detail_id'=>'4','investment_id'=>'2','user_id'=>'4']);
        Auction::create(['amount'=>'10000','balance'=>'500','bank_detail_id'=>'4','investment_id'=>'2','user_id'=>'4']);
        Auction::create(['amount'=>'10000','balance'=>'2100','bank_detail_id'=>'2','investment_id'=>'3','user_id'=>'3']);
        Auction::create(['amount'=>'10000','balance'=>'260','bank_detail_id'=>'2','investment_id'=>'3','user_id'=>'3']);
        Auction::create(['amount'=>'10000','balance'=>'290','bank_detail_id'=>'5','investment_id'=>'4','user_id'=>'6']); 
        Auction::create(['amount'=>'10000','balance'=>'250','bank_detail_id'=>'5','investment_id'=>'4','user_id'=>'6']);
        Auction::create(['amount'=>'10000','balance'=>'250','bank_detail_id'=>'6','investment_id'=>'1','user_id'=>'1']);
        Auction::create(['amount'=>'10000','balance'=>'1000','bank_detail_id'=>'6','investment_id'=>'1','user_id'=>'1']);           
    }
}
