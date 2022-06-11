<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

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
            'nrp'=>'200411100070',
            'nama'=>'Dewi Imani Al-qurani',
            'email'=>'dewi@gmail.com',
            'alamat'=>'Probolinggo, Jawa Timmur'
        ]);
    }
}
