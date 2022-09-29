<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Tentang',
            'desc'  => 'Layanan penitipan pertama di Indonesia yang terdaftar dan telah dipercaya kredibiltasnya',
            'desc2' => ' Kami menyediakan jasa penitipan barang bagi anda yang mau menitipkan barangnya.
            Selain itu juga kami menyediakan jasa penitipan rumah dan kendaraan anda. Tersedia di 3 Kota
            Besar',
        ];

        return view('user.tentang', [
            'data' => $data,
        ]);
    }

    public function indextentang()
    {
        $tentangawal = Tentang::latest()->paginate(5);
        return view('superadmin.super.tentang.index', compact('tentangawal'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'deskripsi1' => '',
            'deskripsi2' =>'',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/app/tentangawal', $gambar->hashName());


        Tentang::create([
            'gambar' => $gambar->hashName(),
            'judul' => $request->judul,
            'deskripsi1' => $request->deskripsi1,
            'deskripsi2' => $request->deskripsi2,
        ]);
        return redirect()->back()->with('berhasil', 'Tentang berhasil ditambahkan!');
    }

    public function edit(Tentang $tentangawal)
    {
        return view('superadmin.super.tentang.edit', $tentangawal);
    }

    public function update(Request $request, Tentang $tentangawal)
    {
        //validate form
        $this->validate($request, [
            'gambar' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'deskripsi1' => '',
            'deskripsi2' =>'',
        ]);

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/app/tentangawal', $gambar->hashName());

            //delete
            Storage::delete('public/app/tentangawal'.$tentangawal->gambar);

            $tentangawal->update([
                'gambar' => $gambar->hashName(),
                'judul' => $request->judul,
                'deskripsi1' => $request->deskripsi1,
                'deskripsi2' => $request->deskripsi2,
            ]);
        } else {
            $tentangawal->update([
                'judul' => $request->judul,
                'deskripsi1' => $request->deskripsi1,
                'deskripsi2' => $request->deskripsi2,
            ]);
        }

               return redirect()->route('tentangawal.index')->with(['success' => 'Data Berhasil diubah!']);
    }


    public function destroy(Tentang $tentangawal)
    {
        Storage::delete('public/app/tentangawal/'.$tentangawal->gambar);

        $tentangawal->delete();

        return redirect()->route('tentangawal.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }
}
