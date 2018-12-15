@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Room Info.</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ $room }}<br>
                        <a href="{{ route('admin.classroom.list') }}" class="btn btn-info" role="button">Classroom list</a>
                        <a href="{{ route('admin.classroom.list.teacher_room.info.reserve', $room) }}" class="btn btn-info" role="button">Reserve</a>

                        <div><br></div>
                        <div class="card">
                                <div class="container">
                                    <div><br></div>
                                    <h2>Room Time Table</h2>
                                    <p>ตารางแสดงข้อมูลการใช้งานห้องเรียน:</p>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Reserve</th>
                                            <th>Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th><a href="{{ route('admin.classroom.list.teacher_room.info.time', [$room, "9.00-12.00"]) }}">9.00-12.00</a></th>
                                            <th>available</th>
                                            <th><a href="{{ route('admin.classroom.list') }}" class="btn btn-info" role="button">Reserve</a></th>
                                            <th><a href="{{ route('admin.classroom.list') }}" class="btn btn-info" role="button">Edit</a></th>
                                        </tr>
                                        <tr>
                                            <th><a href="{{ route('admin.classroom.list.teacher_room.info.time', [$room, "13.00-16.00"]) }}">13.00-16.00</a></th>
                                            <th>unavailable</th>
                                            <th><a href="{{ route('admin.classroom.list') }}" class="btn btn-info" role="button">Reserve</a></th>
                                            <th><a href="{{ route('admin.classroom.list') }}" class="btn btn-info" role="button">Edit</a></th>
                                        </tr>
                                        <tr>
                                            <th><a href="{{ route('admin.classroom.list.teacher_room.info.time', [$room, "16.30-19.30"]) }}">16.30-19.30</a></th>
                                            <th>available</th>
                                            <th><a href="{{ route('admin.classroom.list') }}" class="btn btn-info" role="button">Reserve</a></th>
                                            <th><a href="{{ route('admin.classroom.list') }}" class="btn btn-info" role="button">Edit</a></th>
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
