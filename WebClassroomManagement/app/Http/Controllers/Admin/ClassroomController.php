<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassroomController extends Controller
{
    public function createPage()
    {
        return view('admin.classroom.create');
    }

    public function createStore(Request $request)
    {
        return redirect(route('admin.dashboard'));
    }

    public function listPage()
    {
        return  view('admin.classroom.list');
    }

    public function teacherRoomPage()
    {
        return  view('admin.classroom.teacherRoom');
    }


    public function studentRoomPage()
    {
        return  view('admin.classroom.studentRoom');
    }

    public function teacherAndStudentRoomPage()
    {
        return  view('admin.classroom.teacherAndStudentRoom');
    }

    public function teacherRoomInfo($room)
    {
        return view('admin.classroom.teacherRoomInfo', ['room' => $room]);
    }

    public function studentRoomInfo($room)
    {
        return view('admin.classroom.studentRoomInfo', ['room' => $room]);
    }

    public function teacherAndStudentRoomInfo($room)
    {
        return view('admin.classroom.teacherAndStudentRoomInfo', ['room' => $room]);
    }

    public function teacherRoomReservePage($room)
    {
        return view('admin.classroom.teacherRoomReserve', ['room' => $room]);
    }

    public function studentRoomReservePage($room)
    {
        return view('admin.classroom.studentRoomReserve', ['room' => $room]);
    }

    public function teacherRoomReserveTime($room, $time)
    {
        return view('admin.classroom.teacherRoomReserveTime', compact(['room', 'time']));
    }

    public function studentRoomReserveTime($room, $time)
    {
        return view('admin.classroom.studentRoomReserveTime', compact(['room', 'time']));
    }

    public function teacherAndStudentRoomReservePage($room)
    {
        return view('admin.classroom.studentRoomReserve', ['room' => $room]);
    }

    public function teacherAndStudentRoomReserveTime($room, $time)
    {
        return view('admin.classroom.teacherAndStudentRoomReserveTime', compact(['room', 'time']));
    }
}
