<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function index()
    {
        return view('superadmin.akun.admin.index');
    }
}
