<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    protected function postAdmin()
    {
    $client = new \GuzzleHttp\Client(); 
    $body = array('id' => $adminId,'name' => $name,'tel' => $tel,'position' => $position,'email' => $email);
    $res = $client->request('POST','http://localhost:3000/api/Admins',  $body)->json();
    echo $res->send();
    echo "DONE!";
    }

    protected function postTeacher()
    {
    $client = new \GuzzleHttp\Client(); 
    $body = array('id' => $teacherId,'name' => $name,'tel' => $tel,'position' => $position,'email' => $email);
    $res = $client->request('POST','http://localhost:3000/api/Teachers', $body)->json();
    echo $res->send();
    echo "DONE!";
    }

    protected function postStudent()
    {
    $client = new \GuzzleHttp\Client(); 
    $body = array('id' => $studentId,'name' => $name,'tel' => $tel,'position' => $position,'email' => $email);
    $res = $client->request('POST','http://localhost:3000/api/Students', $body)->json();
    echo $res->send();
    echo "DONE!";
    }

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => 'required|integar|min:8|unique:users',
            'name' => 'required|string|max:255',
            'tel' => 'required|integer|max:10',
            'position'=> 'require|integer|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'tel' => $data['tel'],
            'position' => $data['admin'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /*protected function createTeacher(array $teacher)
    {
        return User::create([
            'id' => $teacher['id'],
            'name' => $teacher['name'],
            'tel' => $teacher['tel'],
            'position' => $teacher['position'],
            'email' => $teacher['email'],
            'password' => Hash::make($teacher['password']),
        ]);
    }

    protected function createStudent(array $student)
    {
        return User::create([
            'id' => $student['id'],
            'name' => $student['name'],
            'tel' => $student['tel'],
            'position' => $student['position'],
            'email' => $student['email'],
            'password' => Hash::make($student['password']),
        ]);
    }*/
}
