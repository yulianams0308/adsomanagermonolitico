<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Role;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     'name' => $this->faker->name(),
        //     'email' => $this->faker->unique()->safeEmail(),
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        //     'imagen_perfil' =>$this->faker->sentence(),
        //     //'role_id' => \App\Models\Role::factory(), // Utiliza el factory d
        // ];
        return [
            'name' =>$this->faker->name,
            'email' =>$this->faker->unique()->safeEmail,
            'email_verified_at' =>now(),
            'password' =>bcrypt('password'), // Puedes establecer una contraseña predeterminada
            'remember_token' =>Str::random(10),
            'imagen_perfil' =>$this->faker->imageUrl(), // Un ejemplo de URL de imagen

            'role_id' =>Role::inRandomOrder()->first()->id, // Relación con Role
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
