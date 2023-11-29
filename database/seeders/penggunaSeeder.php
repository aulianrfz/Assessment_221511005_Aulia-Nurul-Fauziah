<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penggunas')->insert([
            'firstName' => 'Gian Vilcan',
            'lastName' => 'Patra',
            'gender' => 'Male',
            'address' => 'sarijadi bandung',
            'emailUser' => 'gian@gmail.com',
            'nomorTelepon' => '082283398556',
            'tanggalLahir' => Carbon::parse('1990-05-15'),
            'deskripsi' => 'saya adalah gian saya mahasiswa baru polban'
        ]);
    }   
}
