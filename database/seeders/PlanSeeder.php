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
        Plan::create(['name'=>'Starter','interest'=>'50','period'=>'1']);
        Plan::create(['name'=>'General','interest'=>'100','period'=>'2']);
        Plan::create(['name'=>'Pro','interest'=>'250','period'=>'5']);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
