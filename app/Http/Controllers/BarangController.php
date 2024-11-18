<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BarangController extends Controller
{
    public function index(Type $var = null)
    {
        $barang = Barang::get();

        return view('barang', ['barang' => $barang]);
    }

    public function create()
    {
        return view('add.barang-add');
    }

    public function store(Request $request)
    {

        $rules = [
            'nama' => 'unique:barang|max:100|required'
        ];

        $messages = [
            'nama.unique' => 'Barang sudah ada!',
            'nama.max' => 'Barang tidak boleh lebih dari :max karakter!',
            'nama.required' => 'Barang wajib diisi!'
        ];

        $request->validate($rules, $messages);

        $result = Barang::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Barang berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Barang gagal ditambahkan!');
        }

        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);

        return view('edit.barang-edit', ['barang' => $barang]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $barang = Barang::findOrFail($id);


        $rules['nama'] = 'max:100|required|unique:barang,nama,' . $id;
        $messages['nama.unique'] = 'Barang sudah ada!';
        $messages['nama.max'] = 'Barang tidak boleh lebih dari :max karakter!';
        $messages['nama.required'] = 'Barang wajib diisi!';


        $request->validate($rules, $messages);

        $result = $barang->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Barang berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Barang gagal diubah!');
        }

        return redirect('/barang');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $result = $barang->delete();

        if ($result) {
            Session::flash('succMessage', 'Barang berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Barang gagal dihapus!');
        }

        return redirect('/barang');
    }

    public function request_terms($id)
    {
        $barang = Barang::with(['barang_tahun_bulan'])->get();

        foreach ($barang as $key_barang => $value_barang) {

            if ($id == $value_barang->id) {
                return response()->json([count($value_barang->barang_tahun_bulan)]);
            }

        }


    }
}
