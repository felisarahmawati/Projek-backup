<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        return view('finance.page');
    }
    public function transaksiuser()
    {
        return view('finance.transaksi.transaksiuser');
    }
    public function transaksivendor()
    {
        return view('finance.transaksi.transaksivendor');
    }
    public function detailtransaksiuser()
    {
        return view('finance.transaksi.detailtransaksiuser');
    }
    public function detailtransaksivendor()
    {
        return view('finance.transaksi.detailtransaksivendor');
    }
    public function penarikan()
    {
        return view('finance.DataPenarikan.penarikan');
    }
    public function konfirmasi()
    {
        return view('finance.DataPenarikan.konfirmasi');
    }
    public function history()
    {
        return view('finance.DataPenarikan.history');
    }
    public function profile()
    {
        return view('finance.profilefinance');
    }
}
