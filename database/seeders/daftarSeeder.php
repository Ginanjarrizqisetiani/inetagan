<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class daftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftars')->insert([
            'nama_lengkap' =>'Rizqi setia',
            'no_hp' =>'0881867335',
            'email' =>'rizqisetiani@gmailcom',
            'alamat' =>'jalan ismoyo satu',
        ]);

    }
}
