<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserRoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $roleId = Role::inRandomOrder()->firstOrFail()->id;
        $userId = User::inRandomOrder()->firstOrFail()->id;
        return [
            'role_id' => $roleId,
            'user_id' => $userId,
        ];
    }
}
