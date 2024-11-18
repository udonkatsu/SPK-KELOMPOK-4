<?php

namespace App\Http\Controllers;

use App\Models\User;
use PHPUnit\Util\Type;
use App\Models\Barang;
use App\Models\Tahun;
use App\Models\Bulan;
use App\Models\BarangTahunBulan;

class HomeController extends Controller
{
    public function index(Type $var = null)
    {
        $akun = User::get();
        $barang = Barang::get();
        $tahun = Tahun::get();
        $bulan = Bulan::get();
        $barang_tahun_bulan = BarangTahunBulan::get();

        return view('home', ['akun' => $akun, 'barang' => $barang, 'tahun' => $tahun, 'bulan' => $bulan, 'barang_tahun_bulan' => $barang_tahun_bulan]);
    }
}
