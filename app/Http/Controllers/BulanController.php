<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Bulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BulanController extends Controller
{
    public function index(Type $var = null)
    {
        $bulan = Bulan::get();

        return view('bulan', ['bulan' => $bulan]);
    }

    public function create()
    {
        return view('add.bulan-add');
    }

    public function store(Request $request)
    {

        $rules = [
            'nama' => 'unique:bulan|max:100|required'
        ];

        $messages = [
            'nama.unique' => 'Bulan sudah ada!',
            'nama.max' => 'Bulan tidak boleh lebih dari :max karakter!',
            'nama.required' => 'Bulan wajib diisi!'
        ];

        $request->validate($rules, $messages);

        $result = Bulan::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Bulan berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Bulan gagal ditambahkan!');
        }

        return redirect('/bulan');
    }

    public function edit($id)
    {
        $bulan = Bulan::findOrFail($id);

        return view('edit.bulan-edit', ['bulan' => $bulan]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $bulan = Bulan::findOrFail($id);

        
            $rules['nama'] = 'max:100|required|unique:bulan,nama,' . $id;
            $messages['nama.unique'] = 'Bulan sudah ada!';
            $messages['nama.max'] = 'Bulan tidak boleh lebih dari :max karakter!';
            $messages['nama.required'] = 'Bulan wajib diisi!';
        

        $request->validate($rules, $messages);

        $result = $bulan->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Bulan berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Bulan gagal diubah!');
        }

        return redirect('/bulan');
    }

    public function destroy($id)
    {
        $bulan = Bulan::findOrFail($id);
        $result = $bulan->delete();

        if ($result) {
            Session::flash('succMessage', 'Bulan berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Bulan gagal dihapus!');
        }

        return redirect('/bulan');
    }

    public function request()
    {
        $bulan = Bulan::with(['bulan.bulan'])->get();

        return response()->json([$bulan]);
    }
}
