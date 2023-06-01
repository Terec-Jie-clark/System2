<?php

namespace Database\Factories;

use App\Models\Publisher;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Publisher::class; // book database | model

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $publishers = ['Penguin Random House', 'HarperCollins', 'Simon & Schuster', 'Hachette Book Group', 
        'Macmillan Publishers', 'Scholastic Corporation', 'Bloomsbury Publishing', 'Wiley', 
        'Oxford University Press', 'Cambridge University Press' , 'Little,Brown and Company', 
        'Abrams Books', 'Chronicle Books', 'Candlewick Press', 'Andrews McMeel Publishing', 
        "Random House Children's Books", 'Knopf Doubleday Publishing Group', 'Penguin Group'];

        $publishers = $this->faker->randomElement($publishers); // mo pick sa array

        return [
            'publisherName' => $publishers, 
            'location' => $this->faker->address(),
            'contact_number' => $this->faker->phoneNumber(),
        ];
    }   
}
