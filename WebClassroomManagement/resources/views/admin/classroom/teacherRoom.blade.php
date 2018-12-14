@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List classroom</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <a href="{{ route('admin.dashboard') }}" class="btn btn-info" role="button">Dashboard</a>
                            <a href="{{ route('admin.classroom.list') }}" class="btn btn-info" role="button">Classroom list</a>
                            <a href="{{ route('admin.classroom.list.teacher_room') }}" class="btn btn-info" role="button">Teacher Rooms</a>
                            <a href="{{ route('admin.classroom.list.student_room') }}" class="btn btn-info" role="button">Student Rooms</a>
                            <a href="{{ route('admin.classroom.list.teacher_and_student_room') }}" class="btn btn-info" role="button">Teacher & Student Rooms</a>
                        {{-- <a href="{{ route('') }}" class="btn btn-info" role="button">Student Rooms</a>
                         <a href="{{ route('') }}" class="btn btn-info" role="button">Teacher & Student Rooms</a>--}}

                            <div><br></div>
                            <div class="card">
                                <div class="container">
                                    <div><br></div>
                                    <h2>Teacher Rooms list</h2>
                                    <p>ตารางแสดงข้อมูลองห้องสำหรับอาจารย์และบุคลากรทั้งหมดที่อยู่ในระบบ ซึ่งประกอบด้วย:</p>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Adress</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th><a href="{{ route('admin.classroom.list.teacher_room.info', "HM303") }}">HM303</a></th>
                                            <th>อาคาร7ชั้น ชั้น3 คณะวิศวกรรมศาสตร์ KMITL</th>
                                        </tr>
                                        <tr>
                                            <th><a href="{{ route('admin.classroom.list.teacher_room.info', "T101") }}">T101</a></th>
                                            <th>อาคารโทรคมฯ ชั้น1 คณะวิศวกรรมศาสตร์ KMITL</th>
                                        </tr>
                                        <tr>
                                            <th><a href="{{ route('admin.classroom.list.teacher_room.info', "D213") }}">D213</a></th>
                                            <th>อาคารพระเทพฯ ชั้น2 คณะวิศวกรรมศาสตร์ KMITL</th>
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
