<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Color;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique->word(10),
            'size' => $this->faker->randomElement(['Pequeño','Mediano','Grande']),
            'sex' => $this->faker->randomElement(['Macho','Hembra']),
            'description' => $this->faker->text(50),
            'age' => $this->faker->randomElement(['Cachorro','Joven','Adulto','Adulto Mayor']),
            'status' => $this->faker->randomElement(['Perdido','En Adopcion','Encontrado','Adoptado']),

            //traernos los id de otro modelo para llenar las columnas foraneas sin errores
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'color_id' => Color::all()->random()->id,


            
        ];
    }
}
