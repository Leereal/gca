<?php

namespace Database\Factories;

use App\Models\Bonus;
use Illuminate\Database\Eloquent\Factories\Factory;

class BonusFactory extends Factory {
    /**
    * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bonus::class;

    /**
     * Define the model's default state.
    *
    * @return array
    */

    public function definition() {
        return [
            'amount' => $this->faker->randomFloat( 2, 15, 3000 ),
            'user_id' => mt_rand( 1, 20 ),
            'investment_id' => mt_rand( 1, 20 ),
        ];

    }
}
