<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    function run(): void
    {
        $faker = Faker::create('id_ID');

        // Membuat 5 akun dummy
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Password default ter-hash
                'remember_token' => \Illuminate\Support\Str::random(10),
            ]);
        }

        // Jika ada seeder lain dari Modul 4, panggil di sini
        // $this->call(PasarCerdasSeeder::class);
    }
}