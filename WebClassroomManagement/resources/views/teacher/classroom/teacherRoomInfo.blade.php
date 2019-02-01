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

                        <br><br>
                        {{$room}}<br>

                            <div><br></div>
                            <div class="card">
                                <div class="container">
                                    <div><br></div>
                                    <h2>Room Time Table</h2>
                                    <p>ตารางแสดงวันเวลาในการจองห้องเรียน:</p>


                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
