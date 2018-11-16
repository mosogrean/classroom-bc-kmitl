<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;

class ClassroomController extends Controller
{

    public function getAdmin()
    {
    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', 'http://localhost:3000/api/Admins');
    echo $res->getStatusCode();
    // 200
    echo $res->getBody();
    // '{"id": 1420053, "name": "guzzle", ...}'
    }

    public function getTeacher()
    {
    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', 'http://localhost:3000/api/Teachers');
    echo $res->getStatusCode();
    // 200
    echo $res->getBody();
    // '{"id": 1420053, "name": "guzzle", ...}'
    }

    public function getStudent()
    {
    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', 'http://localhost:3000/api/Students');
    echo $res->getStatusCode();
    // 200
    echo $res->getBody();
    // '{"id": 1420053, "name": "guzzle", ...}'
    }
    
    public function viewAdmin()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost:3000/api/AllRooms');
        echo $res->getStatusCode();
        // 200
        echo $res->getBody();
        // '{"id": 1420053, "name": "guzzle", ...}'

        $allRoom = Classroom::all()->toArray();
        return view('admin.admin-classroom');
    }

    public function viewTeacher()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost:3000/api/TeacherRooms');
        echo $res->getStatusCode();
        // 200
        echo $res->getBody();
        // '{"id": 1420053, "name": "guzzle", ...}'

        $teRoom = Classroom::all()->toArray();
        return view('teacher.teacher-classroom');
    }

    public function viewStudent()
    {

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost:3000/api/StudentRooms');
        echo $res->getStatusCode();
        // 200
        echo $res->getBody();
        // '{"id": 1420053, "name": "guzzle", ...}'
            
        $stRoom = Classroom::getBody()->toArray();
        return view('student.student-classroom');
    }

    public function reserveAdmin()
    {
        
        return view('admin.admin-reserve');
    }

    public function reservedAdmin(Request $request)
    {
        
        return redirect()->route('admin.admin-reserve');
    }

    public function reserveTeacher()
    {

        return view('teacher.teacher-reserve');
    }

    public function reservedTeacher(Request $request)
    {
        
        return redirect()->route('teacher.teacher-reserve');
    }

    public function reserveStudent()
    {

        return view('student.student-reserve');
    }

    public function reservedStudent(Request $request)
    {
        
        return redirect()->route('student.student-reserve');
    }

    public function editAll($allRoom)
    {
        $allRoom = Classroom::where(['room' => $allRoom])->get()->first()->toArray();
        return view('admin.admin-edit', ['admin' => $allRoom]);
    }

    public function updateAll(Request $allRoom)
    {
        $allRoom = ClassRoom::where(['room' => $allRoom->room])->update([
            
        ]);
        return redirect()->route('admin.view');
    }
}