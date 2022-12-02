<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeder que utiliza la factory User
        User::factory(100)->create();
        // Seeder que utiliza la factory Category
        category::factory(100)->create();
        // Seeder que utiliza la factory Product
        Product::factory(100)->create();
  

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

