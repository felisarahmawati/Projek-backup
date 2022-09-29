<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $data = [
            "data_provinsi" => Provinsi::get() //mengambil data provinsi dari tabel provinsi
        ];

        return view('superadmin.super.provinsi.index', $data);
    }

    public function store(Request $request)
    {
        $prov = Provinsi::where("nama_provinsi", $request->nama_provinsi)->count();
        
        if ($prov > 0) {
            return back();
        } else {
            Provinsi::create($request->all());

            return back()->with('berhasil', 'Data berhasil ditambahkan!');
        }
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Provinsi::where("id", $request->id)->first()
        ];

        return view("superadmin.super.provinsi.edit", $data);
    }

    public function update(Request $request)
    {
        Provinsi::where("id", $request->id)->update([
            "nama_provinsi" => $request->nama_provinsi
        ]);

        return back()->with('berhasil', 'Data berhasil ditambahkan!');

    }

    public function destroy($id)
    {
        Provinsi::where("id", $id)->delete();

        return back()->with('berhasil', 'Data berhasil dihapus!');
    }
}
