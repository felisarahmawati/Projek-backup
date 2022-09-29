<?php

namespace App\Http\Controllers;
use Alert;
use Auth;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title'     => 'Layanan',
            'sub-title' => 'Silahkan pilih Layanan yang kamu butuhkan',
            'Kategori1' => 'Kendaraan',
            'judul1'    => 'Layanan yang kami sediakan',
            'desc'      => '- Free Cuci Kendaraan, Kendaraan dibersihkan, Kontrol mesin setiap pagi, dan juga Konsultasi & support',
        ];

        return view('user.layanan', [
            'data' => $data,
        ]);
    }
}
