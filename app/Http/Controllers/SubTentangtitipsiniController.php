<?php

namespace App\Http\Controllers;

use App\Models\SubTentangtitipsini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubTentangtitipsiniController extends Controller
{
    public function index()
    {
        $tentang = SubTentangtitipsini::latest()->paginate(5);

        return view('superadmin.super.tentangtitipsini.index', compact('tentang'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'baris1' => '',
            'baris2' => '',
            'baris3' => '',
            'baris4' => '',
        ]);

        //UPLOAD gambar
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/app/tentangtitipsini', $gambar->hashName());

        //Create 
        SubTentangtitipsini::create([
            'gambar' => $gambar->hashName(),
            'judul' => $request->judul,
            'baris1' => $request->baris1,
            'baris2' => $request->baris2,
            'baris3' => $request->baris3,
            'baris4' => $request->baris4,
        ]);
        return redirect()->route('tentang.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    public function edit(SubTentangtitipsini $tentang)
    {
        return view('superadmin.super.tentangtitipsini.edit', compact('tentang'));
    }

    public function update(Request $request, SubTentangtitipsini $tentang)
    {
        //Validate form
        $this->validate($request, [
            'gambar' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'baris1' => '',
            'baris2' => '',
            'baris3' => '',
            'baris4' => '',
        ]);

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/app/tentangtitipsini', $gambar->hashName());

            //delete
            Storage::delete('public/app/tentangtitipsini'.$tentang->gambar);

            $tentang->update([
                'gambar' => $gambar->hashName(),
                'judul' => $request->judul,
                'baris1' => $request->baris1,
                'baris2' => $request->baris2,
                'baris3' => $request->baris3,
                'baris4' => $request->baris4,
            ]);

        } else {
            $tentang->update([
                'judul' => $request->judul,
                'baris1' => $request->baris1,
                'baris2' => $request->baris2,
                'baris3' => $request->baris3,
                'baris4' => $request->baris4,
            ]);
        }

        return redirect()->route('tentang.index')->with(['success' => 'Data Berhasil diubah!']);
    }

    public function destroy(SubTentangtitipsini $tentang)
    {

        Storage::delete('public/app/tentangtitipsini/'.$tentang->gambar);

        $tentang->delete();

        return redirect()->route('tentang.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }
}
