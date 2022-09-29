<?php

namespace App\Http\Controllers;

use App\Models\TambahAlamat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TambahAlamatController extends Controller
{
    public function alamat()
    {
        $alamats = TambahAlamat::all(); //mengambil seluruh data melalui model tambahalamat
        return view('user.profile.alamat.Alamat', compact('alamats'));
    }

    public function tambahalamat(Request $request)
    {
        ///CARA KE-1
        TambahAlamat::insert([
            'user_id' => Auth::user()->id, //diambil dari user yang sedang login
            'nama_lengkap' => $request->nama_lengkap,
            'no_telp' => $request->no_telp,
            'detail_alamat' => $request->detail_alamat,
            'catatan' => $request->catatan,
        ]);
        
        // if(empty($alamats))
        // {
        //     $alamat = new Alamat;
        //     $alamat->users_id = Auth::user()->id;
        //     $alamat->nama_lengkap = $nama_lengkap;
        //     $alamat->no_telp = $no_telp;
        //     $alamat->detail_alamat = $detail_alamat;
        //     $alamat->catatan = $catatan;
        //     $alamat->save();
        // }

        return redirect()->route('user.profile.alamat.Alamat')->with('success', 'Alamat berhasil ditambahkan');
    }
}
