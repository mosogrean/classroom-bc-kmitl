<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function studentUser()
    {
        return  view('admin.user.studentUser');
    }

    public function registerPage()
    {
        return view('admin.user.register');
    }

    public function sid($id)
    {
        return view('admin.user.sid', ['id' => $id]);
    }

    public function addstoken($id)
    {
        return view('admin.user.addstoken', ['id' => $id]);
    }

    public function addstoken2($id)
    {
        return view('admin.user.addstoken2', ['id' => $id]);
    }

    public function sedit($id)
    {
        return view('admin.user.sedit', ['id' => $id]);
    }

    public function sroom($id)
    {
        return view('admin.user.sroom', ['id' => $id]);
    }

    public function opensroom($id)
    {
        return view('admin.user.opensroom', ['id' => $id]);
    }

    public function unreserves($id)
    {
        return view('admin.user.unreserves', ['id' => $id]);
    }

    public function teacherUser()
    {
        return  view('admin.user.teacherUser');
    }

    public function tid($id)
    {
        return view('admin.user.tid', ['id' => $id]);
    }

    public function tedit($id)
    {
        return view('admin.user.tedit', ['id' => $id]);
    }
    public function troom($id)
    {
        return view('admin.user.troom', ['id' => $id]);
    }

    public function opentroom($id)
    {
        return view('admin.user.opentroom', ['id' => $id]);
    }
    public function unreservet($id)
    {
        return view('admin.user.unreservet', ['id' => $id]);
    }
//    public function registerStore(Request $request)
//    {
//        return redirect(route('admin.dashboard'));
//    }
//
//    public function listPage()
//    {
//        return view('admin.user.list');
//    }
//
//    public function teacherListPage()
//    {
//        return view('admin.user.teacherList');
//    }
//
//    public function  studentListPage()
//    {
//        return view('admin.user.studentList');
//    }
//
//    public function teacherInfo($id)
//    {
//        return view('admin.user.teacherInfo', ['id' => $id]);
//    }
//
//    public function studentInfo($id)
//    {
//        return view('admin.user.studentInfo', ['id' => $id]);
//    }
}
