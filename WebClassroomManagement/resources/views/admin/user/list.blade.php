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

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
