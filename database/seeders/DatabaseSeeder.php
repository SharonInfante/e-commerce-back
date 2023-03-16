<?php

namespace Database\Seeders;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use HasFactory;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Product::factory(5)->create();
        \App\Models\Order::factory(5)->create();        
        \App\Models\Shopping::factory(5)->create();

    }
}
