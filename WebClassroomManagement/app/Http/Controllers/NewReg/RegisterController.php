<?php

namespace App\Http\Controllers\NewReg;

use App\BlockChainConnection;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\NewReg\RegistersUsers;
use function PHPSTORM_META\type;

class RegisterController extends Controller
{


    public function  index()
    {
        return  view('auth.newReg');
    }

    public function store(Request $request)
    {
        if ( $request->password != $request->confirmpassword){
            return redirect(route('auth.new_reg'));
        }
        $position = $request->position;
        $payload = [
            '$class' => "classroom.management.kmitl.Students",
            'studentId' => $request->studentID,
            'name' => $request->name,
            'surname' => $request->surname,
            'position' => "resource:classroom.management.kmitl.Positions#$position",
            'faculty' => $request->faculty,
            'major' => $request->major,
            'tel' => $request->tel_,
            'email' => $request->email,
            'token' => 2,
        ];
        try {
            BlockChainConnection::postMethod('STUDENTS', '/api/','Students', $payload);
            User::create([
                'personal_id' => $request->studentID,
                'name' => $request->name,
                'tel' => $request->tel_,
                'position' => $position,
                'email' => $request->email,
                "password" => bcrypt($request->password),
                'is_student' => true,
            ]);
        } catch (\Exception $e){
            return redirect(route('auth.new_reg'));
        }
        return redirect(route('login'));
    }
}
