<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //menggunakan findorfail agar data ID yang tidak ada akan di Fail
    //Elequent misalnya seperti fungsi findOrFail() dan firstOrCreate()
    public function index()
    {
        $user = User::findOrFail(Auth::id());

        return view ('admin.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name'       => 'required|string|min:2|max:100',
            'email'      => 'required|email|unique:users,email, ' . $id . ',id',
            'old_password' => 'nullable|string',
            'password' => 'nullable|required_with:old_password|string|confirmed|min:6',
            // 'no_telp' => 'required|min:11|max:12',
            // 'kota' => 'required|min:20|max:255'            
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        // $user->tgl_lahir = $request->tgl_lahir;
        // $user->kota = $request->kota;
        // $user->no_telp = $request->no_telp;

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

        return back()->with('status', 'Profile updated!');
    }
}
