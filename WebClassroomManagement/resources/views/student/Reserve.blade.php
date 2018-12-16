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
                        Reserve Successfully
                        <br><br>
                        Your Key Room is 'YJ45a'

                    </div>



                </div>
            </div>
@endsection
