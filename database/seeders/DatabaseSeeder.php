<?php

namespace Database\Seeders;

use App\Models\Auction;
use App\Models\BankDetail;
use App\Models\Bids;
use App\Models\Bonus;
use App\Models\Investment;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([     
            BankSeeder::class,
            PlanSeeder::class,  
            AuctionSeeder::class           
        ]); 
        User::factory(10)->create();
        BankDetail::factory(15)->create(); 
        Investment::factory(3)->create();   
        //Auction::factory(20)->create(); 
        Bids::factory(20)->create();
        Bonus::factory(20)->create();
    }
}
