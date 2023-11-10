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
            'status' => $this->faker->randomElement(['En Adopcion','En Proceso','Adoptado']),
            'icon' => $this->faker->randomElement(['fa-solid fa-bone','fa-solid fa-paw','fa-solid fa-leaf','fa-solid fa-trophy','fa-solid fa-house','fa-solid fa-medal','fa-solid fa-hotdog','fa-solid fa-dog','fa-solid fa-shield-dog','fa-solid fa-fish','fa-solid fa-cat','fa-solid fa-fish-fins','fa-solid fa-shield-cat']),
            'bg_color' => $this->faker->randomElement(['#e0c4c8','#ecc3ee','#ff8d7b','#ffdbe0','#fddbff','#ffccb0','#a2def6','#e6f4a2','#80e6a2','#c9f2fd','#f5ffc7','#9ffebe']),

            //traernos los id de otro modelo para llenar las columnas foraneas sin errores
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'color_id' => Color::all()->random()->id,


            
        ];
    }
}
