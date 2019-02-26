<?php

namespace App\Http\Controllers\NewReg;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\NewReg\RegistersUsers;

class RegisterController extends Controller
{


    public function  index()
    {
        return  view('auth.newReg');
    }
}
