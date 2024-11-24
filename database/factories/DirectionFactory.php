<?php

namespace Database\Factories;

use App\Models\Direction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirectionFactory extends Factory
{
    protected $model = Direction::class;

    public function definition()
    {
        // Criação do usuário associado
        $user = User::factory()->create();

        return [
            'created_by' => $user->id, // Associando o usuário recém-criado
        ];
    }
}
