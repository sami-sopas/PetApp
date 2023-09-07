<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //Concatenar con la palabra pets para guardarlos como /pets/img.png
            'url' => 'pets/' . $this->faker->image('public/storage/public/pets','640px','480px',null,false),
        ];
    }
}
