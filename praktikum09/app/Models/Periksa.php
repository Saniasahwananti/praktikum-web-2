<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    protected $table= "pasiens"; //nam tabel yang digunakan

    //kolom yang dapat diisi di tabel pasien
    protected $fillable = [
        'kode',
        'tanggal',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
        'pasien_id',
        'dokter_id',
    ];
    public $timestamp = false;
}
