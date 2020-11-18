<?php

namespace Database\Factories;

use App\Models\Investment;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvestmentFactory extends Factory {
    /**
    * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Investment::class;

    /**
     * Define the model's default state.
    *
    * @return array
    */

    public function definition() {
        return [
            'amount' => $this->faker->randomFloat( 2, 10, 3000 ),
            'description' => $this->faker->randomElement( ['Peer to Peer'] ),          
            'expected_profit'=>$this->faker->randomFloat( 2, 10, 3000 ),
            'balance' => $this->faker->randomFloat( 2, 15, 3000 ),
            'plan_id' => mt_rand( 1, 3),
            'user_id' => mt_rand( 1, 20 ),
            'due_date' => $this->faker->dateTimeBetween( '-1 months', '+1 months' ),
            'bank_id' => mt_rand( 1, 7 ),
            'ipaddress'=>$this->faker->ipv4,
        ];
    }
}
