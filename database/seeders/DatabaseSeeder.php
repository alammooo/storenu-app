<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Abdullah Alam',
            'email' => 'abdullah.alamm@gmail.com',
            'password' => Hash::make('12345'),
            'position' => 'Web Developer',
            'profilePicture' => 'asdasdas'
        ]);

        Category::create([
            'name' => 'Alat Musik',
        ]);

        Category::create([
            'name' => 'Olahraga',
        ]);

        Product::factory()
            ->count(50)
            ->create();
    }
}
