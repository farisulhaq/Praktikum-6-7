<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nim' => '200411100171',
            'name' => 'ahmad farisul haq',
            'email' => 'faries089@gmail.com',
            'alamat' => 'jalan raya sumenep'
        ]);
        Mahasiswa::create([
            'nim' => '200411100201',
            'name' => 'arifatul maghfirah',
            'email' => 'arifa@gmail.com',
            'alamat' => 'jalan raya sumenep'
        ]);
        Mahasiswa::create([
            'nim' => '200411100160',
            'name' => 'masmudi',
            'email' => 'masmudi@gmail.com',
            'alamat' => 'jalan raya bangkalan'
        ]);
        Mahasiswa::create([
            'nim' => '200411100154',
            'name' => 'alief akbar purnama',
            'email' => 'aliefakbr@gmail.com',
            'alamat' => 'jalan raya sumenep'
        ]);
    }
}
