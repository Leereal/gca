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
        // Bank::create(['name'=>'BITCOIN','avatar'=>'bitcoin.png']);
        // Bank::create(['name'=>'SKRILL','avatar'=>'skrill.png']);
        // Bank::create(['name'=>'NETELLER','avatar'=>'neteller.png']);
        Bank::create(['name'=>'PERFECT MONEY','avatar'=>'perfect_money.png']);
        Bank::create(['name'=>'FNB (SOUTH AFRICA)','avatar'=>'fnb.png']);
        Bank::create(['name'=>'STANDARD BANK (SOUTH AFRICA)','avatar'=>'standard_bank.png']);
        Bank::create(['name'=>'NEDBANK (SOUTH AFRICA)','avatar'=>'nedbank.png']);
        Bank::create(['name'=>'CAPITEC (SOUTH AFRICA)','avatar'=>'capitec.png']);
        Bank::create(['name'=>'ABSA (SOUTH AFRICA)','avatar'=>'absa.png']);
        Bank::create(['name'=>'AFRICAN BANK  (SOUTH AFRICA)','avatar'=>'africa_bank.png']);
        Bank::create(['name'=>'BIDVEST (SOUTH AFRICA)','avatar'=>'bidvest.png']);
        Bank::create(['name'=>'DISCOVERY (SOUTH AFRICA)','avatar'=>'discovery.png']);
        Bank::create(['name'=>'GRINDROD (SOUTH AFRICA)','avatar'=>'grindrod.png']);
        Bank::create(['name'=>'GROBANK (SOUTH AFRICA)','avatar'=>'grobank.png']);
        Bank::create(['name'=>'IMPERIAL (SOUTH AFRICA)','avatar'=>'imperial.png']);
        Bank::create(['name'=>'SASFIN (SOUTH AFRICA)','avatar'=>'sasfin.png']);
        Bank::create(['name'=>'TYMEBANK (SOUTH AFRICA)','avatar'=>'tymebank.png']);
        Bank::create(['name'=>'ABSA (BOTSWANA)','avatar'=>'absa.png']);
        Bank::create(['name'=>'BANCABC (BOTSWANA)','avatar'=>'bancabc.png']);
        Bank::create(['name'=>'FIRST CAPITAL (BOTSWANA)','avatar'=>'first_capital.png']);
        Bank::create(['name'=>'FNB (BOTSWANA)','avatar'=>'fnb.png']);
        Bank::create(['name'=>'STANBIC (BOTSWANA)','avatar'=>'stanbic.png']);
        Bank::create(['name'=>'STANDARD (BOTSWANA)','avatar'=>'standard_bank.png']);        
        Bank::create(['name'=>'NEDBANK (NAMIBIA)','avatar'=>'nedbank.png']);
        Bank::create(['name'=>'STANDARD (NAMIBIA)','avatar'=>'standard_bank.png']);
        Bank::create(['name'=>'TRUSTCO (NAMIBIA)','avatar'=>'trustco.png']);
        Bank::create(['name'=>'ATLANTICO (NAMIBIA)','avatar'=>'atlantico.png']);
        Bank::create(['name'=>'BANK BIC (NAMIBIA)','avatar'=>'bankbic.png']);
        Bank::create(['name'=>'LETSHEGO (NAMIBIA)','avatar'=>'letshego.png']);
        Bank::create(['name'=>'NEDBANK (SWAZILAND)','avatar'=>'nedbank.png']);
        Bank::create(['name'=>'STANDARD (SWAZILAND)','avatar'=>'standard_bank.png']);
        Bank::create(['name'=>'FNB (SWAZILAND)','avatar'=>'fnb.png']);
        Bank::create(['name'=>'STANDARD (LESOTHO)','avatar'=>'standard_bank.png']);
        Bank::create(['name'=>'NEDBANK (LESOTHO)','avatar'=>'nedbank.png']);
        Bank::create(['name'=>'FNB (LESOTHO)','avatar'=>'fnb.png']);
        Bank::create(['name'=>'MPESA (LESOTHO)','avatar'=>'mpesa.png']);
        Bank::create(['name'=>'FNB (NAMIBIA)','avatar'=>'fnb.png']);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
