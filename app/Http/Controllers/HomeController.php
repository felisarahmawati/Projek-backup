<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home = Home::all();
        return view('admin.home.index', compact('home'));
    }
   
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'gambar' => 'mimes:jpg,jpeg,png',
            'judul1' => '',
            'judul2' => '',
            'judul3' => '',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/app/home', $gambar->hashName());

        Home::create([
            'judul1' => $request->judul1,
            'judul2' => $request->judul2,
            'judul3' => $request->judul3,
            'gambar' => $gambar->hashName(),
        ]);
        return redirect()->back()->with('berhasil', 'Home berhasil ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Home::where("id", $request->id)->first()
        ];

        return view("admin.home.edit", $data);
    }

    public function update(Request $request)
    {
        if ($request->file("gambar_new")) {
            if($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("gambar_new")->store("home");
        } else {
            $data = $request->gambarLama;
        }
        Home::where("id", $request->id)->update([
            'judul1' => $request-> judul1,
            'judul2' => $request-> judul2,
            'judul3' => $request->judul3,
            'gambar' => $data,

        ]);

        return back()->with('berhasil', 'Home berhasil diupdate');
    }

    public function show(Request $request)
    {
        $data = [
            "detail" =>Home::where("id", $request->id)->first()
        ];

        return view("admin.home.detail", $data);
    }

    public function destroy($id)
    {
        $hom = Home::where("id", $id)->first();

        Storage::delete($hom->gambar);

        $hom->delete();

        return back()->with('berhasil', 'Home berhasil di hapus!');
    }
}
