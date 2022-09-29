<?php

namespace App\Http\Controllers;

use App\Models\HomeAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class HomeawalController extends Controller
{
    public function index()
    {
        $homeawal = HomeAwal::latest()->paginate(5);

        return view('superadmin.super.homeawal.index', compact('homeawal'));
    }

    public function create()
    {
        return view('superadmin.super.homeawal.create');
    }

    public function store(Request $request)
    {
        //VALIDASI FORM
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content1'   => 'required|min:10',
            'content2'   => 'required|min:10',
            'content3'   => 'required|min:10',
        ]);

        //UPLOAD IMAGE
        $image = $request->file('image');
        $image->storeAs('public/homeawal', $image->hashName());

        //CREATE homeawal
        HomeAwal::create([
            'image' => $image->hashName(),
            'content1' => $request->content1,
            'content2' => $request->content2,
            'content3' => $request->content3,
        ]);

        //REDIRECT TO INDEX
        return redirect()->route('homeawal.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(HomeAwal $homeawal)
    {
        return view('superadmin.super.homeawal.edit', compact('homeawal'));
    }

    public function update(Request $request, Homeawal $homeawal)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content1'     => '',
            'content2'   => '',
            'content3'   => '',
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/homeawal', $image->hashName());

            //delete old image
            Storage::delete('public/homeawal/'.$homeawal->image);

            //update homeawal with new image
            $homeawal->update([
                'image'     => $image->hashName(),
                'content1'   => $request->content1,
                'content2'   => $request->content2,
                'content3'   => $request->content3,
            ]);

        } else {

            //update homeawal without image
            $homeawal->update([
                'content1'   => $request->content1,
                'content2'   => $request->content2,
                'content3'   => $request->content3,
            ]);
        }

        //redirect to index
        return redirect()->route('homeawal.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(HomeAwal $homeawal)
    {
        //delete image
        Storage::delete('public/homeawal/'. $homeawal->image);

        //delete homeawal
        $homeawal->delete();

        //redirect to index
        return redirect()->route('homeawal.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
