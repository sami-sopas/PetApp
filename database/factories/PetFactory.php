<?php

namespace Database\Factories;

use App\Models\Type;
use App\Models\User;
use App\Models\Category;
use App\Models\Cateogory;
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
            'color' => $this->faker->unique->word(10),
            'size' => $this->faker->unique->word(20),
            'sex' => $this->faker->unique->word(10),
            'description' => $this->faker->text(50),
            'age' => $this->faker->word(10),
            'status' => $this->faker->randomElement(['Perdido','En Adopcion','Encontrado','Adoptado']),
            //traernos los id de otro modelo para llenar las columnas foraneas sin errores
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'type_id' => Type::all()->random()->id,


            
        ];
    }
}
