<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::create([
            'nama' => 'Dr. A',
        ]);
        Dokter::create([
            'nama' => 'Dr. B',
        ]);
        Dokter::create([
            'nama' => 'Dr. C',
        ]);
        Dokter::create([
            'nama' => 'Dr. D',
        ]);
        Dokter::create([
            'nama' => 'Dr. E',
        ]);
        Dokter::create([
            'nama' => 'Dr. F',
        ]);
    }
}
