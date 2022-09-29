<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TambahAlamat;
use App\Models\Village;
Use App\Models\District;
Use App\Models\Province;
use App\Models\Regency;

class IndoregionController extends Controller
{
    public function AlamatProfile()
    {
        $provinces = Province::all();
        // $regencies = Regency::all();
        // $districts = District::all();
        // $villages = Village::all();

        return view('user.profile.alamat.Tambah_alamat', compact('provinces'));
        // return view('user.profile.alamat.Tambah_alamat', compact('provinces','regencies','districts','villages'));
    }

    public function getkabupaten(request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $kabupatens = Regency::where('province_id',$id_provinsi)->get();
        
        $option = "<option>Pilih Kabupaten...</option>";
        foreach($kabupatens as $kabupaten)
        {
            $option.= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }

        echo $option;
    }

    public function getkecamatan(request $request)
    {
        $id_kabupaten = $request->id_kabupaten;
        $kecamatans = District::where('regency_id',$id_kabupaten)->get();
        
        $option = "<option>Pilih Kecamatan...</option>";
        foreach($kecamatans as $kecamatan)
        {
            $option.= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }

        echo $option;
    }

    public function getdesa(request $request)
    {
        $id_kecamatan = $request->id_kecamatan;
        $desas = Village::where('district_id',$id_kecamatan)->get();
        
        $option = "<option>Pilih Desa...</option>";
        foreach($desas as $desa)
        {
            $option.= "<option value='$desa->id'>$desa->name</option>";
        }

        echo $option;
    }

    public function alamat()
    {
        $data = TambahAlamat::all();

        // dd($data);
        return view('user.profile.alamat.Alamat', compact('data'));
    }

    public function tambahalamat()
    {
        return view('user.profile.alamat.Tambah_alamat');
    }

    public function insertalamat(Request $request)
    {
        // dd($request->all());
        TambahAlamat::create($request->all());
        return redirect()->route('user.profile.alamat.Alamat')->with('success', 'Alamat berhasil ditambahkan');
        
    }

    //menampilkan data
    public function editalamat($id) //parameter id diambil dari $alamat->id
    {
        $data = TambahAlamat::find($id);
        // dd($data);
        return view('user.profile.alamat.editalamat', compact('data'));
    }

    //mengupdate data
    public function updatealamat(Request $request, $id)
    {
        $data = TambahAlamat::find($id);
        $data->update($request->all());

        return redirect()->route('user.profile.alamat.Alamat')->with('success', 'Alamat berhasil diubah');
    }

    //delete alamat
    public function deletealamat($id)
    {
        $data = TambahAlamat::find($id);
        $data->delete();
        
        return redirect()->route('user.profile.alamat.Alamat')->with('success', 'Alamat berhasil dihapus');
    }
}
