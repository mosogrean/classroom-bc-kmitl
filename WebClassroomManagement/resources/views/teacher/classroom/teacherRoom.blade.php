@extends('layouts.app-user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Teacher role</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <a href="{{ route('teacher.dashboard') }}" class="btn btn-info" role="button">Dashboard</a>
                            <a href="{{ route('teacher.history') }}" class="btn btn-info" role="button">History</a>
                            <a href="{{ route('teacher.classroom') }}" class="btn btn-info" role="button">Classroom</a>


                        <div class="card-body">
                            <div class="card-header">Classroom</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                    <a href="{{ route('teacher.classroom.teacher_room') }}" class="btn btn-info" role="button">Teacher Room</a>

                                    <div><br></div>
                                    <div class="card">
                                        <div class="container">
                                            <div><br></div>
                                            <h2>Teacher Rooms List</h2>
                                            <p>ตารางแสดงข้อมูลจองห้องเรียนสำหรับอาจารย์ทั้งหมดที่อยู่ในระบบ ซึ่งประกอบด้วย:</p>
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Room ID</th>
                                                    <th>Adress</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th><a href="{{ route('teacher.classroom.teacher_room.info', "HM303") }}">HM303</a></th>
                                                    <th>อาคาร7ชั้น ชั้น3 คณะวิศวกรรมศาสตร์ KMITL</th>
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
