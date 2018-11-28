@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List account</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ route('admin.user.list.teacher') }}" class="btn btn-info" role="button">Teacher</a>
                        <a href="{{ route('admin.user.list.student') }}" class="btn btn-info" role="button">Student</a>

                            <div><br></div>
                            <div class="card">
                                <div class="container">
                                    <div><br></div>
                                    <h2>Students list</h2>
                                    <p>ตารางแสดงข้อมูลนักเรียนทั้งหมดที่อย่ในระบบ ซึ่งประกอบด้วย: </p>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Reserving</th>
                                            <th>token</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="{{ route('admin.user.list.student.info', "58010187") }}">58010187</a></td>
                                            <td>จิรภัทร กิจทำ</td>
                                            <td>นักศึกษาชั้นปีที่ 4</td>
                                            <th>2</th>
                                            <th>30</th>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('admin.user.list.student.info', "58010211") }}">58010211</a></td>
                                            <td>เจษฎา ธระสวัสดิ์</td>
                                            <td>นักศึกษาชั้นปีที่ 4</td>
                                            <th>4</th>
                                            <th>23</th>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('admin.user.list.student.info', "58010353") }}">58010353</a></td>
                                            <td>ณัชพล อุบลสัคคะ</td>
                                            <td>นักศึกษาชั้นปีที่ 4</td>
                                            <th>5</th>
                                            <th>17</th>
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
