<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function dasboard()
    {
        return view('admin.index');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function kategorilayanan()
    {
        return view('admin.layanan-kategori.showsubkategori');
    }

    public function edit()
    {
        return view('admin.profile.edit_profil');
    }

    public function setting()
    {
        return view('admin.setting');
    }

    public function payment()
    {
        return view('admin.payment');
    }

    public function order()
    {
        return view('admin.order');
    }

    public function pengaturanuser()
    {
        return view('admin.pengaturan-user');
    }

    public function barang()
    {
        return view('admin.barang');
    }

    public function home()
    {
        return view('admin.home');
    }

    public function bangunan()
    {
        return view('admin.bangunan');
    }

    public function pickup()
    {
        return view('admin.pickup');
    }

    public function vendor()
    {
        return view('admin.data_vendor');
    }

    public function trans()
    {
        return view('admin.data_trans');
    }

    public function data_pickup()
    {
        return view('admin.data_pick_up');
    }

    public function trans_selesai()
    {
        return view('admin.data_trans_selesai');
    }

    public function trans_berlangsung()
    {
        return view('admin.data_trans');
    }
}
