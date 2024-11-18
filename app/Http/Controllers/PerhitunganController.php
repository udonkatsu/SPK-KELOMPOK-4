<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Tahun;
use App\Models\Bulan;
use App\Models\Barang;
use App\Models\BarangTahunBulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PerhitunganController extends Controller
{
    public function terms(Type $var = null)
    {
        $tahun = Tahun::get();
        $bulan = Bulan::get();
        $barang = Barang::with(['barang_tahun_bulan'])->get();
        $barang_tahun_bulan = BarangTahunBulan::get();

        return view('perhitungan.perhitungan-terms', ['barang' => $barang, 'tahun' => $tahun, 'bulan' => $bulan, 'barang_tahun_bulan' => $barang_tahun_bulan]);
    }

    public function config(Type $var = null)
    {
        $barang = Barang::get();
        $tahun = Tahun::get();
        $bulan = Bulan::get();
        $satuan = ['Gram', 'Ons', 'Kilogram', 'Ton'];

        $bool_objects = json_decode(json_encode([
            ['value' => 0, 'nama' => 'Tidak'],
            ['value' => 1, 'nama' => 'Ya']
        ]));

        $tahun_values = Tahun::get()->toArray();

        $filtered_values = array_filter($tahun_values, function ($item) {
            return is_numeric($item['nama']);
        });

        usort($filtered_values, function ($a, $b) {
            return strcmp($a['nama'], $b['nama']);
        });

        $years = $filtered_values;

        return view('perhitungan.perhitungan-config', ['tahun' => $tahun, 'bulan' => $bulan, 'satuan' => $satuan, 'barang' => $barang, 'bool_objects' => $bool_objects, 'years' => $years]);
    }

    public function set($barang_id, $term)
    {


        // $rules = [
        //     'tahun_id' => 'required',
        //     'barang_id' => 'required',
        //     'konversi_satuan' => 'required',
        // ];

        // $messages = [
        //     'tahun_id.required' => 'Tahun wajib dipilih!',
        //     'barang_id.required' => 'Barang wajib dipilih!',
        //     'konversi_satuan.required' => 'Konversi Satuan wajib dipilih!',
        // ];

        // $request->validate($rules, $messages);

        // $tahun_test = [2, 3, 4, 5];

        // $barang_get = BarangTahunBulan::with(['barang', 'tahun', 'bulan'])
        // ->where('barang_id', $request->barang_id)
        // ->whereIn('tahun_id', $tahun_test)
        // ->get();


        // dd($barang_get);

        // $tahun_terpilih = Tahun::whereIn('id', $tahun_test)
        // ->get();

        // dd($tahun_terpilih);

        // $time2 = [];
        // $time2 = [];
        // $i = 0;
        // $j = 0;

        // foreach ($request->bulan as $key_bulan => $value_bulan) {

        //    if($value_bulan==1){

        //     $time2[$j] = $j;
        //     $j++;
        //    }
        // }



        // if (count($time2)<2) {
        //     Session::flash('errMessage', 'Perhitungan gagal!');
        //     return redirect()->back()->withErrors([
        //         'barang_null' => "Minimal pilih 2 bulan!"
        //     ])->withInput();
        // }        

        //cek apakah bulan yang diinput sesuai pada data stok barang 
        // $bool = true;
        // foreach ($request->bulan as $key_bulan => $value_bulan) {

        //     if ($value_bulan == 1) {
        //         $bool = false;

        //         foreach ($barang_get as $key_barang_get => $value_barang_get) {

        //             if ($value_barang_get->bulan_id == $key_bulan) {
        //                 $bool = true;
        //                 break; 
        //             }
        //         }

        //         if (!$bool) {

        //             $bulan_terpilih2 = Bulan::findOrFail($key_bulan);
        //             $barang_terpilih2 = Barang::findOrFail($request->barang_id);
        //             Session::flash('errMessage', 'Perhitungan gagal!');

        //             return redirect()->back()->withErrors([
        //                 'barang_null' => "Stok barang ({$barang_terpilih2->nama}) tidak ditemukan pada tahun ({$tahun_terpilih->nama}) bulan ({$bulan_terpilih2->nama})!"
        //             ])->withInput();
        //         }
        //     }
        // }

        // $barang = [];
        // $bulan_terpilih = [];
        // $i = 0;

        // foreach ($barang_get as $key_barang_get => $value_barang_get) {

        //     foreach ($request->bulan as $key_bulan => $value_bulan) {

        //         if (
        //             isset($value_barang_get->tahun_id)
        //             && isset($value_barang_get->bulan_id)
        //             && $value_bulan == 1
        //             && $value_barang_get->bulan_id == $key_bulan
        //         ) {

        //             //konversi satuan
        //             if ($request->konversi_satuan == "Gram") {
        //                 if ($value_barang_get->satuan == "Ons") {
        //                     $value_barang_get->jumlah = $this->ounceToGram($value_barang_get->jumlah);
        //                 } elseif ($value_barang_get->satuan == "Kilogram") {
        //                     $value_barang_get->jumlah = $this->kilogramToGram($value_barang_get->jumlah);
        //                 } elseif ($value_barang_get->satuan == "Ton") {
        //                     $value_barang_get->jumlah = $this->tonToGram($value_barang_get->jumlah);
        //                 }
        //             }elseif ($request->konversi_satuan == "Ons") {
        //                 if ($value_barang_get->satuan == "Gram") {
        //                     $value_barang_get->jumlah = $this->gramToOunce($value_barang_get->jumlah); 
        //                 }elseif ($value_barang_get->satuan == "Kilogram") {
        //                     $value_barang_get->jumlah = $this->kilogramToOunce($value_barang_get->jumlah); 
        //                 } elseif ($value_barang_get->satuan == "Ton") {
        //                     $value_barang_get->jumlah = $this->tonToOunce($value_barang_get->jumlah);
        //                 }
        //             }elseif ($request->konversi_satuan == "Kilogram") {
        //                 if ($value_barang_get->satuan == "Gram") {
        //                     $value_barang_get->jumlah = $this->gramToKilogram($value_barang_get->jumlah); 
        //                 }elseif ($value_barang_get->satuan == "Ons") {
        //                     $value_barang_get->jumlah = $this->ounceToKilogram($value_barang_get->jumlah); 
        //                 } elseif ($value_barang_get->satuan == "Ton") {
        //                     $value_barang_get->jumlah = $this->tonToKilogram($value_barang_get->jumlah);
        //                 }
        //             }elseif ($request->konversi_satuan == "Ton") {
        //                 if ($value_barang_get->satuan == "Gram") {
        //                     $value_barang_get->jumlah = $this->gramToTon($value_barang_get->jumlah);
        //                 }elseif ($value_barang_get->satuan == "Ons") {
        //                     $value_barang_get->jumlah = $this->ounceToTon($value_barang_get->jumlah);
        //                 } elseif ($value_barang_get->satuan == "Kilogram") {
        //                     $value_barang_get->jumlah = $this->kilogramToTon($value_barang_get->jumlah);
        //                 }
        //             } 

        //             $barang[$i] = [
        //                 "id" => $value_barang_get->barang_id,
        //                 "nama" => $value_barang_get->barang->nama,
        //                 "tahun_id" => $value_barang_get->tahun_id,
        //                 "bulan_id" => $value_barang_get->bulan_id,
        //                 "jumlah" => $value_barang_get->jumlah,
        //                 "satuan" => $value_barang_get->satuan,
        //             ];

        //             $bulan_terpilih[$i] = [
        //                 "nama" => $value_barang_get->bulan->nama,
        //                 "jumlah" => $value_barang_get->jumlah,
        //                 "satuan" => $value_barang_get->satuan,
        //             ];

        //             $i++;
        //         }
        //     }
        // }    

        // Fungsi trend moment
        // function trendMoment($x, $y, $predictionPoint)
        // {

        //     $n = count($x);
        //     $sumX = array_sum($x);
        //     $sumY = 0;

        //     foreach ($y as $subArray) {

        //         $sumY += $subArray['jumlah'];
        //     }

        //     $sumXX = 0;
        //     $sumXY = 0;

        //     for ($i = 0; $i < $n; $i++) {

        //         $sumXX += $x[$i] * $x[$i];
        //         $sumXY += $x[$i] * $y[$i]['jumlah'];
        //     }

        //     //substitusi & eliminasi
        //     $b = (($n * $sumXY) - ($sumX * $sumY)) / (($n * $sumXX) - ($sumX * $sumX));
        //     $a = ($sumY - $b * $sumX) / $n;

        //     // Prediksi nilai pada titik ramalan
        //     $ramalan = ($b * $predictionPoint) + $a;

        //     return $ramalan;
        // }

        // // Melakukan ramalan nilai untuk titik selanjutnya (contoh: bulan ke-n)
        // $nextMonth = count($time2);
        // $ramalan = trendMoment($time2, $barang, $nextMonth);
        // $barang_terpilih = $barang_get[0]->barang->nama;

        // return view('perhitungan.perhitungan-set', ['bulan_berikut' => $nextMonth, 'ramalan' => $ramalan, 'barang_terpilih' => $barang_terpilih, 'bulan_terpilih' => $bulan_terpilih, 'konversi_satuan' => $request->konversi_satuan,'tahun_terpilih'=>$tahun_terpilih]);

        function limitArraySum($array, $limit, $start)
        {

            $sum = 0;
            $i = 0;

            foreach ($array as $element) {

                if ($i >= $start) {

                    $sum += $element;

                    if ($i == $limit - 1) {
                        break;
                    }
                }

                $i++;
            }

            return $sum;
        }

        $barang_get = Barang::with(['barang_tahun_bulan'])->get();
        $tahun = Tahun::get();


        //menghitung banyak bulan prediksi
        $totalBulanPrediksi = 0;
        $y = [];
        $x = [];
        foreach ($barang_get as $key_barang_get => $value_barang_get) {

            if ($barang_id == $value_barang_get->id) {

                $i = 0;
                $totalBulanPrediksi = count($value_barang_get->barang_tahun_bulan);
                foreach ($value_barang_get->barang_tahun_bulan as $key_value_barang_get_barang_tahun_bulan => $value_value_barang_get_barang_tahun_bulan) {

                    $y[$i] = $value_value_barang_get_barang_tahun_bulan->jumlah;
                    $x[$i] = $i;

                    $i++;
                }

            }

        }

        // dd($x);
        // if (count($x) < 1) {
        //     Session::flash('errMessage', 'Minimal stok barang adalah 2 bulan!');
        //     return redirect()->back();
        // }

        $nBulanPrediksi = 0;
        if ($term == 'st') {
            $nBulanPrediksi = $totalBulanPrediksi / count($tahun);
        } elseif ($term == 'mt') {
            $nBulanPrediksi = $totalBulanPrediksi / 2;
        } elseif ($term == 'lt') {
            $nBulanPrediksi = $totalBulanPrediksi;
        }

        $nBulanPrediksi = round($nBulanPrediksi);
        // dd($nBulanPrediksi);
        // Data sampel

        // $y = [35, 37, 50, 60, 60, 37, 37, 35, 50, 60, 70, 75, 20, 37, 50, 60, 60, 37, 37, 35, 50, 60, 70, 75, 30, 35, 50, 70, 60, 50, 50, 50, 45, 50, 70, 75, 50, 60, 75, 75, 85];
        // $x = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40];

        // Fungsi regresi linear
        function regresiLinear($x, $y, $n, $t)
        {
            $jumlahXiYi = 0;
            $jumlahXiKuadrat = 0;

            $countStart = (($t - ($n - 1)) - 1);

            $p = 0;

            for ($i = $countStart; $i < $t; $i++) {
                $x[$i] = $p;
                $jumlahXiYi += ($x[$i] * $y[$i]);
                $jumlahXiKuadrat += ($x[$i] * $x[$i]);
                $p++;
            }

            $jumlahX = limitArraySum($x, $p, $countStart);
            $jumlahY = limitArraySum($y, $p, $countStart);

            $b = (($p * $jumlahXiYi) - ($jumlahX * $jumlahY)) / (($p * $jumlahXiKuadrat) - ($jumlahX * $jumlahX));
            $a = ($jumlahY - $b * $jumlahX) / ($p);

            return ['b' => $b, 'a' => $a];
        }

        // Memanggil regresi linear
        $trend = regresiLinear($x, $y, $nBulanPrediksi, $totalBulanPrediksi);

        // Memprediksi penjualan untuk bulan berikut                
        $ramalanPenjualan = [];
        for ($i = 0; $i < $nBulanPrediksi; $i++) {

            $ramalanPenjualan['trend'][$i] = $trend['a'] + $trend['b'] * $x[$i];

        }

        $ramalanPenjualan['trend'][$i] = $trend['a'] + $trend['b'] * $nBulanPrediksi;
        // dd($ramalanPenjualan);
        // Menampilkan hasil
        // foreach ($ramalanPenjualan as $key_ramalanPenjualan => $value_ramalanPenjualan) {
        //     echo "Ramalan penjualan untuk bulan ke " . $key_ramalanPenjualan . " : " . $value_ramalanPenjualan . "<br>";
        // }
        // die;

        // Evaluasi hasil trend
        function MAD($yAktual, $yPrediksi, $n)
        {
            $jumlahAbsolutDeviation = ($yAktual - $yPrediksi) / $n;

            return $jumlahAbsolutDeviation;
        }

        function MSE($yAktual, $yPrediksi, $n)
        {
            $jumlahAbsolutError = abs(pow($yAktual - $yPrediksi, 2) / $n);

            return $jumlahAbsolutError;
        }

        function MAPE($yAktual, $yPrediksi, $n)
        {
            $jumlahAbsolutePercentageError = ($yAktual / $yPrediksi) * 100;

            return $jumlahAbsolutePercentageError;
        }

        for ($i = 0; $i < $nBulanPrediksi; $i++) {

            $ramalanPenjualan['MAD'][$i] = MAD($y[$totalBulanPrediksi - ($nBulanPrediksi - $i)], $ramalanPenjualan['trend'][$i], $nBulanPrediksi);
            $ramalanPenjualan['MSE'][$i] = MSE($y[$totalBulanPrediksi - ($nBulanPrediksi - $i)], $ramalanPenjualan['trend'][$i], $nBulanPrediksi);
            $ramalanPenjualan['MAPE'][$i] = MAPE($y[$totalBulanPrediksi - ($nBulanPrediksi - $i)], $ramalanPenjualan['trend'][$i], $nBulanPrediksi);

        }

        // dd($ramalanPenjualan);
        $barang_terpilih = Barang::findOrFail($barang_id);

        return view('perhitungan.perhitungan-set', ['ramalan_penjualan' => $ramalanPenjualan, 'barang_terpilih' => $barang_terpilih, 'bulan_ke_n' => $totalBulanPrediksi + 1, 'n_bulan_prediksi' => $nBulanPrediksi, 'term' => $term]);

    }

    // Ton ke Kilogram
    public function gramToOunce($satuan)
    {
        return $satuan * 0.03527396; // 1 gram = 0.03527396 ounces
    }
    public function gramToKilogram($satuan)
    {
        return $satuan / 1000; // 1 gram = 0.001 kilograms
    }
    public function gramToTon($satuan)
    {
        return $satuan / 1e6; // 1 gram = 1e-6 tons
    }
    public function ounceToGram($satuan)
    {
        return $satuan / 0.03527396; // 1 ounce = 28.3495 grams
    }
    public function ounceToKilogram($satuan)
    {
        return $satuan * 0.0283495; // 1 ounce = 0.0283495 kilograms
    }
    public function ounceToTon($satuan)
    {
        return $satuan * 2.83495e-5; // 1 ounce = 2.83495e-5 metric tons
    }
    public function kilogramToGram($satuan)
    {
        return $satuan * 1000; // 1 kilogram = 1000 grams
    }
    public function kilogramToOns($satuan)
    {
        return $satuan * 35.27396; // 1 kilogram = 35.27396 ons
    }
    public function kilogramToTon($satuan)
    {
        return $satuan / 1000; // 1 kilogram = 0.001 ton
    }
    public function tonToGram($satuan)
    {
        return $satuan * 1e6; // 1 ton = 1,000,000 grams
    }
    public function tonToOns($satuan)
    {
        return $satuan * 35273.96; // 1 metric ton = 35273.96 ons
    }
    public function tonToKilogram($satuan)
    {
        return $satuan * 1000; // 1 ton = 1000 kilograms
    }

}
