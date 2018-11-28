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
                                    <h2>Teachers list</h2>
                                    <p>ตารางแสดงข้อมูลอาจารย์ทั้งหมดที่อย่ในระบบ ซึ่งประกอบด้วย:</p>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Teacher ID</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Reserving</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="{{ route('admin.user.list.teacher.info', ["11548661"]) }}">11548661</a></td>
                                            <td>รศ.ดร.ปราโมทย์ วาดเขียน</td>
                                            <td>คณะบดี</td>
                                            <th>2</th>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('admin.user.list.teacher.info', "48761248") }}">48761248</a></td>
                                            <td>รศ.ดร.จีรสุดา โกษียาภรณ์</td>
                                            <td>รองอธีการบดี</td>
                                            <th>3</th>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('admin.user.list.teacher.info', "98456712") }}">98456712</a></td>
                                            <td>รศ.ดร.ตุลยา </td>
                                            <td>อธิการบดี</td>
                                            <th>5</th>
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
