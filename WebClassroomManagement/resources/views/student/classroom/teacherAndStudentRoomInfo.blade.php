@extends('layouts.app-user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student role</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ route('student.dashboard') }}" class="btn btn-info" role="button">Dashboard</a>
                        <a href="{{ route('student.history') }}" class="btn btn-info" role="button">History</a>
                        <a href="{{ route('student.classroom') }}" class="btn btn-info" role="button">Classroom</a>

                        <br><br>
                        {{$room}}<br>

                            <div><br></div>
                            <div class="card">
                                <div class="container">
                                    <div><br></div>
                                    <h2>Room Time Table</h2>
                                    <p>ตารางแสดงเวลาในการจองห้องเรียน:</p>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th><a href="{{ route('student.classroom.teacher_and_student_room.info.time', [$room, "9.00-12.00"]) }}">9.00-12.00</a></th>
                                            <th>unavailable</th>
                                            <th><a href="{{ route('student.classroom') }}" class="btn btn-info" role="button">Edit</a></th>
                                        </tr>
                                        <tr>
                                            <th><a href="{{ route('student.classroom.teacher_and_student_room.info.time', [$room, "13.00-16.00"]) }}">13.00-16.00</a></th>
                                            <th>unavailable</th>
                                            <th><a href="{{ route('student.classroom') }}" class="btn btn-info" role="button">Edit</a></th>
                                        </tr>
                                        <tr>
                                            <th><a href="{{ route('student.classroom.teacher_and_student_room.info.time', [$room, "16.30-19.30"]) }}">16.30-19.30</a></th>
                                            <th>unavailable</th>
                                            <th><a href="{{ route('student.classroom') }}" class="btn btn-info" role="button">Edit</a></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
