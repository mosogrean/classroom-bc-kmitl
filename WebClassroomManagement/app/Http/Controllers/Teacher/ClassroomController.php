<?php

namespace App\Http\Controllers\Teacher;

use App\Reservation\CheckDate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassroomController extends Controller
{


    public function teacherRoom()
    {
        return  view('teacher.classroom.teacherRoom');
    }

    public function tcalendar($room)
    {
        return view('teacher.classroom.tcalendar', ['room' => $room]);
    }

    public function ttimePicker($room, Request $request)
    {
        $dateTime = $request->all();
        $data = [
            'room' => $room,
            'date' => $dateTime['date'],
            'day' => $dateTime['day'],
            'month' => $dateTime['month'],
            'year' => $dateTime['year'],
        ];
        return view('teacher.classroom.ttime', $data);
    }
    public function tReservation($room, Request $request)
    {
        $dateTime = $request->all();
        $day = CheckDate::checkDay($dateTime['day']);
        $time = CheckDate::checkTime($dateTime['time']);
        $data = [
            'room' => $room,
            'time' => $time,
            'date' => $dateTime['date'],
            'day' => $day,
            'month' => $dateTime['month'],
            'year' => $dateTime['year'],
        ];
        return view('teacher.classroom.treservation', $data);
    }


    public function teacherAndStudentRoom()
    {
        return view('teacher.classroom.teacherAndStudentRoom');
    }

    public function tscalendar($room)
    {
        return view('teacher.classroom.tscalendar', ['room' => $room]);
    }

   public function tsClass($room)
   {
       return view('teacher.classroom.tsClass',['room'=> $room]);
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
