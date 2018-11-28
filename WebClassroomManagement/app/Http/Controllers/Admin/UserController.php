<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function registerPage()
    {
        return view('admin.user.register');
    }

    public function registerStore(Request $request)
    {
        return redirect(route('admin.dashboard'));
    }

    public function listPage()
    {
        return view('admin.user.list');
    }

    public function teacherListPage()
    {
        return view('admin.user.teacherList');
    }

    public function  studentListPage()
    {
        return view('admin.user.studentList');
    }

    public function teacherInfo($id)
    {
        return view('admin.user.teacherInfo', ['id' => $id]);
    }

    public function studentInfo($id)
    {
        return view('admin.user.studentInfo', ['id' => $id]);
    }
}
