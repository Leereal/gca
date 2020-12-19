<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
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
        DB::table('banks')->truncate();      
        Bank::create(['name'=>'ORANGE','avatar'=>'orange.png']);
        Bank::create(['name'=>'MY ZAKA','avatar'=>'myzaka.png']);
        Bank::create(['name'=>'FNB (BOTSWANA)','avatar'=>'fnb.png']);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
