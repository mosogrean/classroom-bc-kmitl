<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {

        return view("auth.login");
    }

    public function login(Request $request)
    {
        $login = Auth::attempt([
            'personal_id' => $request->username,
            'password' => $request->password,
        ]);
        if ($login) {
            $info = User::where(['personal_id' => $request->username])->get()->first();
            if ($info->is_admin == true) {
                return redirect (route('admin.dashboard'));
            }
        }
        return redirect(route('student.dashboard'));

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }

}
