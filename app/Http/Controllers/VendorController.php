<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class VendorController extends Controller
{
    public function index()
    {
        return view('vendor.homelagi');
    }
    
    public function OrderanBaru()
    {
        return view('Vendor.order.kendaraan.orderan_baru');
    }

    public function RincianBaru()
    {
        return view('Vendor.order.kendaraan.rincian_baru');
    }

    public function ProfileVendor()
    {
        return view('Vendor.Profile.profile_vendor');
    }

    public function EditProfile()
    {
        return view('Vendor.Profile.edit_profilevendor');
    }

    public function EditAlamat()
    {
        return view('Vendor.Profile.profile_vendor');
    }

    public function Notifikasi()
    {
        return view('Vendor.Profile.Notifikasi');
    }

    public function KebijakanPrivasi()
    {
        return view('Vendor.Profile.Kebijakan_privasi');
    }

    public function KetentuanLayanan()
    {
        return view('Vendor.Profile.Ketentuan_layanan');
    }

    public function PusatBantuan()
    {
        return view('Vendor.Profile.Pusat_bantuan');
    }
}
