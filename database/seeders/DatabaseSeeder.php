<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            DirectionSeeder::class,
            StudentSeeder::class,
        ]);
        // User::factory(10)->create();

        // // User::factory()->create([
        // //     'name' => 'José Ribamar',
        // //     'email' => 't@example.com',
        // //     'password' => '12345678'
        // // ]);
    }
}
