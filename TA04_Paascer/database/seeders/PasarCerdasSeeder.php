<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kios;
use App\Models\Retribusi;
use Faker\Factory as Faker;

class PasarCerdasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $kategoriList = ['Sembako', 'Pakaian', 'Daging & Ikan', 'Kelontong', 'Kuliner'];
        for ($i = 1; $i <= 10; $i++) {
            $kios = Kios::create([
                'nomor_kios' => 'K-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'nama_pemilik' => $faker->name,
                'kategori' => $faker->randomElement($kategoriList),
            ]);

            Retribusi::create([
                'kios_id' => $kios->id,
                'nominal' => $faker->randomElement([10000, 15000, 20000, 25000]),
                'tanggal_bayar' => $faker->date(),
                'status_pembayaran' => 'Lunas',
            ]);
        }
    }
}