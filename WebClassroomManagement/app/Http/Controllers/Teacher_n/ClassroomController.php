<?php

namespace App\Http\Controllers\Teacher_n;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassroomController extends Controller
{

    public function teacherNRoomInfo($room)
    {
        return view('teacher.classroom.teacherRoomInfo', ['room' => $room]);
    }

    public function teacherRoomTime($room, $time)
    {
        return view('teacher.classroom.teacherRoomTime', compact(['room', 'time']));
    }

    public function teacherAndStudentRoomInfo($room)
    {
        return view('teacher.classroom.teacherAndStudentRoomInfo', ['room' => $room]);
    }

    public function teacherAndStudentRoomTime($room, $time)
    {
        return view('teacher.classroom.teacherAndStudentRoomTime', compact(['room', 'time']));
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
