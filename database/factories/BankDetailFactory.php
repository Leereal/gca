<?php

namespace Database\Factories;

use App\Models\BankDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BankDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1,20),
            'bank_id' => mt_rand(1,7),
            'account_number' => mt_rand(100000,999999),      
            'ipAddress'=>$this->faker->ipv4, 
        ];
    }
}
