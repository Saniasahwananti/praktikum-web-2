<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('periksas')->insert([
            [
                'kode' => 'P001',
                'tanggal' => ' 2024-05-19',
                'berat' => '68',
                'tinggi' => '170',
                'tensi' => '120/80',
                'keterangan' => 'normal',
                'pasien_id' => '1',
                'dokter_id' => '1',
            ],
            [
                'kode' => 'P002',
                'tanggal' => ' 2024-05-20',
                'berat' => '72',
                'tinggi' => '160',
                'tensi' => '130/88',
                'keterangan' => 'hipertensi 1',
                'pasien_id' => '2',
                'dokter_id' => '2',
            ],
            [
                'kode' => 'P003',
                'tanggal' => ' 2024-05-21',
                'berat' => '78',
                'tinggi' => '170',
                'tensi' => '140/90',
                'keterangan' => 'hipertensi 2',
                'pasien_id' => '3',
                'dokter_id' => '3',
            ],
            [
                'kode' => 'P004',
                'tanggal' => ' 2024-05-22',
                'berat' => '68',
                'tinggi' => '168',
                'tensi' => '125/80',
                'keterangan' => 'normal',
                'pasien_id' => '4',
                'dokter_id' => '4',
            ],
            [
                'kode' => 'P005',
                'tanggal' => ' 2024-05-23',
                'berat' => '79',
                'tinggi' => '180',
                'tensi' => '140/89',
                'keterangan' => 'hipertensi 1',
                'pasien_id' => '5',
                'dokter_id' => '5',
            ],
        ]);
    }
}
