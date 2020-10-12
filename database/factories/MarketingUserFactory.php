<?php

namespace Database\Factories;

use App\Models\MarketingUser;
use Illuminate\Database\Eloquent\Factories\Factory;
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;


class MarketingUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MarketingUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'username'=>  $this->faker->name,      //create a title with 4 words in a sentence...
                'password'=> 'password123',
                ];
    }



}
