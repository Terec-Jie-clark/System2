<?php

namespace Database\Factories;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class; // book database | model

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = ['Fiction', 'Love Story', 'Non-Fiction', 'Thriller', 'Science Fiction', 'Fantasy'];
        $category = $this->faker->randomElement($category);
        return [
            'bookName' => $this->faker->sentence(4), // generate 4 words
            'category' => $category,
            'publisherId' => $this->faker->numberBetween(1, 10),
        ];
    }   
}
