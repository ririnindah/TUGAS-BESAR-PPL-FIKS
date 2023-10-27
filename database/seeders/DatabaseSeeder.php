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

        \App\Models\operator::factory(20)->create();
        \App\Models\mahasiswa::factory(20)->create();
        \App\Models\dosenwali::factory(20)->create();
        \App\Models\departemen::factory(20)->create();
        \App\Models\semester::factory(10)->create();
        \App\Models\Irs::factory(10)->create();
        \App\Models\Skripsi::factory(10)->create();
        \App\Models\Pkl::factory(10)->create();
        \App\Models\Khs::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
