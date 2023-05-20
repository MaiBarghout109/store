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

        $users = \App\Models\User::factory(10)->create();

        $categories = \App\Models\Category::factory(20)->create();
        $products = \App\Models\Product::factory(50)->create();
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    } 
}
