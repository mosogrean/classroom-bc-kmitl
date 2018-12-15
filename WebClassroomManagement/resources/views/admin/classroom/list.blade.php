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


            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
