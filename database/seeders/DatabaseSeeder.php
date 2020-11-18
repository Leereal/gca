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
            PlanSeeder::class           
        ]); 
        User::factory(20)->create();
        BankDetail::factory(20)->create(); 
        Investment::factory(60)->create();   
        Auction::factory(20)->create(); 
        Bids::factory(50)->create();
        Bonus::factory(50)->create();
    }
}
