<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate the table.
        DB::table('plans')->truncate();
        Plan::create(['name'=>'Starter','interest'=>'40','period'=>'4']);
        Plan::create(['name'=>'General','interest'=>'120','period'=>'10']);
        Plan::create(['name'=>'Pro','interest'=>'200','period'=>'15']);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
