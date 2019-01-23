<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('student.classroom');
    }

    public function studentRoom()
    {
        return  view('student.classroom.studentRoom');
    }

    public function teacherAndStudentRoom()
    {
        return  view('student.classroom.teacherAndStudentRoom');
    }

    public function studentRoomInfo($room)
    {
        return view('student.classroom.studentRoomInfo', ['room' => $room]);
    }

    public function studentRoomTime($room, $time)
    {
        return view('student.classroom.studentRoomTime', compact(['room', 'time']));
    }

    public function teacherAndStudentRoomInfo($room)
    {
        return view('student.classroom.teacherAndStudentRoomInfo', ['room' => $room]);
    }

    public function teacherAndStudentRoomTime($room, $time)
    {
        return view('student.classroom.teacherAndStudentRoomTime', compact(['room', 'time']));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
