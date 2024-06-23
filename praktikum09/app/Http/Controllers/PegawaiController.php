<?php

namespace App\Http\Controllers;

use Iuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('pegawai.index');
    }
}
