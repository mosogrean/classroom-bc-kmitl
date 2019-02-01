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

                    </div>

                    <div><br></div>
                    <div class="card">
                        <div class="container">
                            <div><br></div>
                            <h2>Teacher History  Table</h2>
                            <p>ตารางแสดงข้อมูลการใช้งานนอาจารย์:</p>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Room reserve</th>
                                    <th>Date reserve</th>
                                    <th>Tokens left</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>16/12/2018,13.00-16.00</th>
                                    <th>HM304</th>
                                    <th>15/12/2018,19.20</th>
                                    <th>30</th>
                                </tr>
                                <tr>
                                    <th>17/12/2018,13.00-16.00</th>
                                    <th>HM304</th>
                                    <th>15/12/2018,16.49</th>
                                    <th>31</th>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
