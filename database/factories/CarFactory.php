<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $transmission = ['automatic', 'manual'];
        $fuel = ['petrol','diesel'];
 
        return [
            'color'   =>  $this->faker->colorName,
            'price'=>   $this->faker->randomNumber,
            'plate' =>  $this->faker->slug,
            'doors'   =>  $this->faker->randomDigit,
            'transmission' =>   $transmission[rand(0,1)],
            'fuel'    =>   $fuel[rand(0,1)],
        ];
    }
}
