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
}
