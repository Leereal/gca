<?php

namespace Database\Factories;

use App\Models\Bids;
use Illuminate\Database\Eloquent\Factories\Factory;

class BidsFactory extends Factory {
    /**
    * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bids::class;

    /**
     * Define the model's default state.
    *
    * @return array
    */

    public function definition() {
        return [
            'amount' => $this->faker->randomFloat( 2, 10, 3000 ),      
            'auction_id' => mt_rand( 1, 10 ),
            'bank_id' => mt_rand( 1, 4 ),
            'plan_id' => mt_rand( 1, 3 ),
            'user_id' => mt_rand( 1, 20 ),
            'expiration_time' => $this->faker->dateTimeBetween( 'now', '+2 days' ),
            'comment' =>$this->faker->text(),
            'ipaddress'=>$this->faker->ipv4,
        ];
    }
}
