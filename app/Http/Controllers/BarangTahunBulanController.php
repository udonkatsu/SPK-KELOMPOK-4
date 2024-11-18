<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Barang;
use App\Models\Tahun;
use App\Models\Bulan;
use App\Models\BarangTahunBulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BarangTahunBulanController extends Controller
{
    public function index(Type $var = null)
    {
        $barang = Barang::with(['barang_tahun_bulan.tahun', 'barang_tahun_bulan.bulan'])->get();
        $tahun = Tahun::with(['barang_tahun_bulan.barang'])->get();
        $bulan = Bulan::with(['barang_tahun_bulan.barang'])->get();

        return view('barang_tahun_bulan', ['barang' => $barang, 'bulan' => $bulan, 'tahun' => $tahun]);
    }

    public function create()
    {
        $barang = Barang::with(['barang_tahun_bulan.tahun', 'barang_tahun_bulan.bulan'])->get();
        $tahun = Tahun::with(['barang_tahun_bulan.barang'])->get();
        $bulan = Bulan::with(['barang_tahun_bulan.barang'])->get();
        $satuan = ['gram', 'Ons', 'Kilogram', 'Ton'];

        return view('add.barang_tahun_bulan-add', ['barang' => $barang, 'bulan' => $bulan, 'tahun' => $tahun, 'satuan' => $satuan]);
    }

    public function store(Request $request)
    {
        $rules = [
            'barang_id' => 'required',
            'satuan' => 'required',
            'tahun_id' => 'required',
            'bulan_id' => 'required',
            'jumlah' => 'required|numeric|gt:0|max:1000000000000',
        ];

        $messages = [
            'barang_id.required' => 'Barang wajib dipilih!',
            'satuan.required' => 'Satuan wajib dipilih!',
            'tahun_id.required' => 'Tahun wajib dipilih!',
            'bulan_id.required' => 'Bulan wajib dipilih!',
            'jumlah.required' => 'Jumlah wajib diisi!',
            'jumlah.numeric' => 'Jumlah harus berupa angka!',
            'jumlah.gt' => 'Jumlah harus lebih dari 0!',
            'jumlah.max' => 'Jumlah harus dibawah :max!',
        ];

        $barang_tahun_bulan = BarangTahunBulan::where([
            'barang_id' => $request->barang_id,
            'satuan' => $request->satuan,
            'tahun_id' => $request->tahun_id,
            'bulan_id' => $request->bulan_id,
        ])->with(['tahun', 'bulan'])->first();

        if ($barang_tahun_bulan) {

            return redirect()->back()->withErrors([
                'barang_id' => "Relasi sudah ada pada tahun {$barang_tahun_bulan->tahun->nama} bulan {$barang_tahun_bulan->bulan->nama}!",
                'satuan' => "Relasi sudah ada pada tahun {$barang_tahun_bulan->tahun->nama} bulan {$barang_tahun_bulan->bulan->nama}!",
                'tahun_id' => "Relasi sudah ada pada tahun {$barang_tahun_bulan->tahun->nama} bulan {$barang_tahun_bulan->bulan->nama}!",
                'bulan_id' => "Relasi sudah ada pada tahun {$barang_tahun_bulan->tahun->nama} bulan {$barang_tahun_bulan->bulan->nama}!",
            ])->withInput();
        }

        $request->validate($rules, $messages);

        $result = BarangTahunBulan::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Relasi berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Relasi gagal ditambahkan!');
        }

        return redirect('/barang_tahun_bulan');
    }

    public function edit($id)
    {
        $barang_tahun_bulan = BarangTahunBulan::with(['tahun', 'bulan', 'barang'])->findOrFail($id);
        $barang = Barang::with(['barang_tahun_bulan.tahun', 'barang_tahun_bulan.bulan'])->get();
        $tahun = Tahun::with(['barang_tahun_bulan.barang'])->get();
        $bulan = Bulan::with(['barang_tahun_bulan.barang'])->get();
        $satuan = ['Gram','Ons', 'Kilogram', 'Ton'];

        return view('edit.barang_tahun_bulan-edit', ['barang_tahun_bulan' => $barang_tahun_bulan, 'bulan' => $bulan, 'barang' => $barang, 'tahun' => $tahun, 'satuan' => $satuan]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $barang_tahun_bulan = BarangTahunBulan::findOrFail($id);
        $bool = true;

        // if ($request->barang_id != $barang_tahun_bulan->barang_id) {
        //     $rules['barang_id'] = 'required';
        //     $messages['barang_id.required'] = 'Barang wajib diisi!';
        //     $bool = false;
        // }

        if ($request->satuan != $barang_tahun_bulan->satuan) {
            $rules['satuan'] = 'required';
            $messages['satuan.required'] = 'Satuan wajib diisi!';
            $bool = false;
        }

        if ($request->tahun_id != $barang_tahun_bulan->tahun_id) {
            $rules['tahun_id'] = 'required';
            $messages['tahun_id.required'] = 'Tahun wajib diisi!';
            $bool = false;
        }

        if ($request->bulan_id != $barang_tahun_bulan->bulan_id) {
            $rules['bulan_id'] = 'required';
            $messages['bulan_id.required'] = 'Bulan wajib diisi!';
            $bool = false;
        }

        if ($request->jumlah != $barang_tahun_bulan->jumlah) {
            $rules['jumlah'] = 'required|numeric|gt:0|max:1000000000000';
            $messages = [
                'jumlah.required' => 'Jumlah wajib diisi!',
                'jumlah.numeric' => 'Jumlah harus berupa angka!',
                'jumlah.gt' => 'Jumlah lebih dari 0!',
                'jumlah.max' => 'Jumlah harus dibawah :max!',
            ];
        }

        $barang_tahun_bulan_get = BarangTahunBulan::where([
            'barang_id' => $request->barang_id,
            'satuan' => $request->satuan,
            'tahun_id' => $request->tahun_id,
            'bulan_id' => $request->bulan_id,
        ])->with(['tahun', 'bulan'])->first();

        if ($barang_tahun_bulan_get && $bool == false) {

            return redirect()->back()->withErrors([
                'barang_id' => "Relasi sudah ada pada tahun {$barang_tahun_bulan_get->tahun->nama} bulan {$barang_tahun_bulan_get->bulan->nama}!",
                'satuan' => "Relasi sudah ada pada tahun {$barang_tahun_bulan_get->tahun->nama} bulan {$barang_tahun_bulan_get->bulan->nama}!",
                'tahun_id' => "Relasi sudah ada pada tahun {$barang_tahun_bulan_get->tahun->nama} bulan {$barang_tahun_bulan_get->bulan->nama}!",
                'bulan_id' => "Relasi sudah ada pada tahun {$barang_tahun_bulan_get->tahun->nama} bulan {$barang_tahun_bulan_get->bulan->nama}!",
            ])->withInput();
        }

        $request->validate($rules, $messages);

        $dataToUpdate = $request->except(['_token', '_method']);

        $result = BarangTahunBulan::where('id', $request->id)
            ->update($dataToUpdate);

        if ($result) {
            Session::flash('succMessage', 'Relasi berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Relasi gagal diubah!');
        }

        return redirect('/barang_tahun_bulan');
    }

    public function destroy($id)
    {
        $barang_tahun_bulan = BarangTahunBulan::findOrFail($id);
        $result = $barang_tahun_bulan->delete();

        if ($result) {
            Session::flash('succMessage', 'Relasi berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Relasi gagal dihapus!');
        }

        return redirect('/barang_tahun_bulan');
    }
}
