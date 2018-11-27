<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function history()
    {
        return view('admin.history');
    }

    public function classroom()
    {
        return  view('admin.classroom');
    }
}
