<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Dr.Sania',
                'gender' => 'P',
                'tmp_lahir' => 'Cianjur',
                'tgl_lahir' => '1985-02-01',
                'kategori' => 'Umum',
                'telepon' => '085798730926',
                'alamat' => 'Cianjur',
                'unit_kerja' => '1',

            ],
            [
                'nama' => 'Dr.Rama',
                'gender' => 'L',
                'tmp_lahir' => 'Purwakarta',
                'tgl_lahir' => '1980-04-02',
                'kategori' => 'Umum',
                'telepon' => '085798730926',
                'alamat' => 'purwakarta',
                'unit_kerja' => '2',
            ],
            [
                'nama' => 'Dr.Nurmila',
                'gender' => 'P',
                'tmp_lahir' => 'Cirebon',
                'tgl_lahir' => '1999-02-01',
                'kategori' => 'Umum',
                'telepon' => '085798730926',
                'alamat' => 'Cirebon',
                'unit_kerja' => '3',
            ],
            [
                'nama' => 'Dr.Syahdan',
                'gender' => 'l',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1995-11-10',
                'kategori' => 'Umum',
                'telepon' => '085798730926',
                'alamat' => 'Bandung',
                'unit_kerja' => '4',
            ],
            [
                'nama' => 'Dr.Silva',
                'gender' => 'P',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1999-04-05',
                'kategori' => 'Umum',
                'telepon' => '085798730926',
                'alamat' => 'Jakarta',
                'unit_kerja' => '5',
            ],
        ]);
    }
}
