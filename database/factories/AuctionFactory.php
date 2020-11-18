<?php

namespace Database\Factories;

use App\Models\Auction;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuctionFactory extends Factory {
    /**
    * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Auction::class;

    /**
     * Define the model's default state.
    *
    * @return array
    */

    public function definition() {
        return [
            'amount' => $this->faker->randomFloat( 2, 10, 3000 ),
            'balance' => $this->faker->randomFloat( 2, 15, 3000 ),       
            'bank_id' => mt_rand( 1, 7 ),
            'investment_id' => mt_rand( 1, 10 ),
            'user_id' => mt_rand( 1, 20 ),
            'comment' =>$this->faker->text(),
            'ipaddress'=>$this->faker->ipv4,
        ];
    }
}
