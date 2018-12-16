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


                        <div class="card-body">
                            <div class="card-header">Classroom</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                            <a href="{{ route('student.classroom.student_room') }}" class="btn btn-info" role="button">Student Room</a>
                            <a href="{{ route('student.classroom.teacher_and_student_room') }}" class="btn btn-info" role="button">Teacher and Student Room</a>

                                    <div><br></div>
                                    <div class="card">
                                        <div class="container">
                                            <div><br></div>
                                            <h2>Student Rooms list</h2>
                                            <p>ตารางแสดงข้อมูลองห้องสำหรับนักศึกษาทั้งหมดที่อยู่ในระบบ ซึ่งประกอบด้วย:</p>
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Room ID</th>
                                                    <th>Adress</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th><a href="{{ route('student.classroom.student_room.info', "HM304") }}">HM304</a></th>
                                                    <th>อาคาร7ชั้น ชั้น3 คณะวิศวกรรมศาสตร์ KMITL</th>
                                                </tr>
                                                <tr>
                                                    <th><a href="{{ route('student.classroom.student_room.info', "E303") }}">E303</a></th>
                                                    <th>อาคาร12ชั้น ชั้น3 คณะวิศวกรรมศาสตร์ KMITL</th>
                                                </tr>
                                                <tr>
                                                    <th><a href="{{ route('student.classroom.student_room.info', "D513") }}">D513</a></th>
                                                    <th>อาคารพระเทพฯ ชั้น5 คณะวิศวกรรมศาสตร์ KMITL</th>
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
    </div>
@endsection
