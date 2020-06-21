<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// CHECK LOGIN
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    // VIEW LOGIN SUCCESSS
    public function index()
    {
        return view('admin.dashboard.index');
    }

    // LOGOUT
    public function logout() {
        Auth::logout();
        return redirect()->route('admin');
    }
}
