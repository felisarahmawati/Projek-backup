<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('user.index');
    // }
    public function index(Request $request)
    {
        $data = [
            'hero1' => 'Bingung mau nitip barang dimana?',
            'hero2' => 'Titipsini aja',
            'hero3' => 'Semua barang bisa dititipkan termasuk barang, rumah dan kendaraan',
        ];

        return view('user.index', [
            'data' => $data,
        ]);
    }

    public function InfoPembayaran()
    {
        return view('user.pemesanan.info_pembayaran');
    }
    
    public function LastProgress()
    {
        return view('user.pemesanan.History.Last_Progress');
    }

    public function OnProgress()
    {
        return view('user.pemesanan.History.On_Progress');
    }

    public function struk()
    {
        return view('user.pemesanan.struk');
    }

    public function KonfirmPembayaran()
    {
        return view('user.pemesanan.konfirm_pembayaran');
    }

    public function pemesanan()
    {
        return view('user.pemesanan.pemesanan');
    }

    //PROFILE USER
    public function profileuser()
    {
        return view('user.profile.profileuser');
    }

    public function editprofile()
    {
        return view('user.profile.edit_profile');
    }

    public function alamat()
    {
        return view('user.profile.alamat.Alamat');
    }

    public function EditAlamat()
    {
        return view('user.profile.alamat.edit_alamat');
    }

    public function TambahAlamat()
    {
        return view('user.profile.alamat.Tambah_alamat');
    }

    public function Notifikasi()
    {
        return view('user.Notifikasi');
    }

    public function KebijakanPrivasi()
    {
        return view('user.profile.kebijakanprivasi');
    }

    public function Bantuan()
    {
        return view('user.profile.bantuan');
    }

    //ALAMAT

    //Data home di folder admin
    public function home()
    {
        $data = Home::paginate(4);
        
        // dd($data);
        return view('admin.home.home', compact('data'));
    }

    //menampilkan data create
    public function tambahhome()
    {
        return view('admin.home.tambahhome');
    }

    //Memanggil request saat data dimasukan
    public function inserthome(Request $request)
    {
        // dd($request->all());
        $data = Home::create($request->all()); //menampung data home ke database jadi kita kasih $data
        //membuat kondisi, jika request berupa gambar. 
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('Gambarhome/', $request->file('gambar')->getClientOriginalName());//membuat folder untuk gambar yang telah dimasukan akan ada di folder gambarhome
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin.home.home')->with('success', 'Data berhasil di tambahkan');
    }

    //Menampilkan data berdasarkan ID
    public function tampilhome($id) //$id adalah parameter yang diambil dari $home->id
    {
        $data = Home::find($id); //menampilkan datanya
        // dd($data); //mencoba menampilkan data
        return view('admin.home.tampilhome', compact('data'));
    }

    //Update data berdasarkan $id
    public function updatehome(Request $request, $id)
    {
        $data = Home::find($id); //$data atau data yang ada di Home kita update 
        $data->update($request->all()); //semua data yang ada akan kita update/request

        return redirect()->route('admin.home.home')->with('success', 'Data berhasil di update');
    }

    //delete
    public function deletehome($id)
    {
        $data = Home::find($id); //menampilkan datanya
        $data->delete();

        return redirect()->route('admin.home.home')->with('success', 'Data berhasil di hapus');
    }

}
