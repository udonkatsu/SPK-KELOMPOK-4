<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Tahun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TahunController extends Controller
{
    public function index(Type $var = null)
    {
        $tahun = Tahun::get();

        return view('tahun', ['tahun' => $tahun]);
    }

    public function create()
    {
        return view('add.tahun-add');
    }

    public function store(Request $request)
    {

        $rules = [
            'nama' => 'unique:tahun|max:100|required'
        ];

        $messages = [
            'nama.unique' => 'Tahun sudah ada!',
            'nama.max' => 'Tahun tidak boleh lebih dari :max karakter!',
            'nama.required' => 'Tahun wajib diisi!'
        ];

        $request->validate($rules, $messages);

        $result = Tahun::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Tahun berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Tahun gagal ditambahkan!');
        }

        return redirect('/tahun');
    }

    public function edit($id)
    {
        $tahun = Tahun::findOrFail($id);

        return view('edit.tahun-edit', ['tahun' => $tahun]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $tahun = Tahun::findOrFail($id);

     
            $rules['nama'] = 'max:100|required|unique:tahun,nama,' . $id;
            $messages['nama.unique'] = 'Tahun sudah ada!';
            $messages['nama.max'] = 'Tahun tidak boleh lebih dari :max karakter!';
            $messages['nama.required'] = 'Tahun wajib diisi!';
        

        $request->validate($rules, $messages);

        $result = $tahun->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Tahun berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Tahun gagal diubah!');
        }

        return redirect('/tahun');
    }

    public function destroy($id)
    {
        $tahun = Tahun::findOrFail($id);
        $result = $tahun->delete();

        if ($result) {
            Session::flash('succMessage', 'Tahun berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Tahun gagal dihapus!');
        }

        return redirect('/tahun');
    }

    public function request()
    {
        $tahun = Tahun::with(['tahun.tahun'])->get();

        return response()->json([$tahun]);
    }
}
