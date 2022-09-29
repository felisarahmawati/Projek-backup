<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index()
    {
        return view('superadmin.index');
    }
    public function dasboard()
    {
        return view('superadmin.index');
    }

    public function profile()
    {
        return view('superadmin.profile');
    }

    // public function setting()
    // {
    //     return view('admin.setting');
    // }

    public function payment()
    {
        return view('superadmin.Data.payment');
    }

    public function order()
    {
        return view('superadmin.Data.order');
    }

    // public function pengaturanuser()
    // {
    //     return view('admin.pengaturan-user');
    // }

    // public function barang()
    // {
    //     return view('admin.barang');
    // }

    // public function home()
    // {
    //     return view('admin.home');
    // }

    // public function bangunan()
    // {
    //     return view('admin.bangunan');
    // }

    public function pickup()
    {
        return view('superadmin.Vendor.pickup');
    }

    public function transaksi()
    {
        return view('superadmin.Vendor.transaksi');
    }

    public function laporan()
    {
        return view('superadmin.laporan');
    }

    public function vendor()
    {
        return view('superadmin.Vendor.vendor');
    }

    //ubah password dan poto
    public function indexp()
    {
        $user = User::findOrFail(Auth::id());

        return view ('superadmin.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name'       => 'required|string|min:2|max:100',
            'email'      => 'required|email|unique:users,email, ' . $id . ',id',
            'old_password' => 'nullable|string',
            'password' => 'nullable|required_with:old_password|string|confirmed|min:6'
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('old_password')) { //update password lama ke baru
            if (Hash::check($request->old_password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
            } else {
                return back()
                    ->withErrors(['old_password' => __('Please enter the correct password')])
                    ->withInput();
            }
        }

        if (request()->hasFile('photo')) {
            if($user->photo && file_exists(storage_path('app/public/photos/' . $user->photo))){
                Storage::delete('app/public/photos/'.$user->photo);
            }

            $file = $request->file('photo');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->photo->move(storage_path('app/public/photos'), $fileName); 
            //foto yang sudah diupload akan masuk ke folder storage/public/photos
            $user->photo = $fileName;
        }

        $user->save();

        return back()->with('status', 'Profile berhasil di updated!');
    }

}
