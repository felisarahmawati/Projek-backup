<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'h2' => 'Contact Us',
            'p'  => 'Hubungi Kami',
        ];

        return view('user.kontak', [
            'data' => $data,
        ]);
    }
}
