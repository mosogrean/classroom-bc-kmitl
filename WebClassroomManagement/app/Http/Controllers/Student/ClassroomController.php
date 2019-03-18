<?php

namespace App\Http\Controllers\Student;

use App\Reservation\CheckDate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentRoom()
    {
        return  view('student.classroom.studentRoom');
    }

    public function scalendar($room)
    {
        return view('student.classroom.scalendar', ['room' => $room]);
    }

    public function stimePicker($room, Request $request)
    {
        $dateTime = $request->all();
        $data = [
            'room' => $room,
            'date' => $dateTime['date'],
            'day' => $dateTime['day'],
            'month' => $dateTime['month'],
            'year' => $dateTime['year'],
        ];
        return view('student.classroom.stime', $data);
    }

    public function sReservation($room, Request $request)
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
        return view('student.classroom.sreservation', $data);
    }

    public function sEdit($room, Request $request)
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
        return view('student.classroom.sedit', $data);
    }


    public function sConfirmation(Request $request)
    {
        return($request);
    }

    public function teacherAndStudentRoom()
    {
        return view('student.classroom.teacherAndStudentRoom');
    }

    public function tscalendar($room)
    {
        return view('student.classroom.tscalendar', ['room' => $room]);
    }

    public function tstimePicker($room, Request $request)
    {
        $dateTime = $request->all();
        $data = [
            'room' => $room,
            'date' => $dateTime['date'],
            'day' => $dateTime['day'],
            'month' => $dateTime['month'],
            'year' => $dateTime['year'],
        ];
        return view('student.classroom.tstime', $data);
    }

    public function tsReservation($room, Request $request)
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
        return view('student.classroom.tsreservation', $data);
    }

    public function tsConfirmation(Request $request)
    {
        return($request);
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
