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
        return view('admin.dashboard');
    }

    public function ListAccount()
    {
        return view('admin.listaccount');
    }

    public function CreateAccount()
    {
        return view('admin.createaccount');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function teacherroom()
    {
        return  view('admin.teacherclassroom');
    }

    public function studentroom()
    {
        return  view('admin.studentclassroom');
    }

    public function tsroom()
    {
        return  view('admin.tsclassroom');
    }

    public function logout()
    {
        return view("auth.login");
    }
}
