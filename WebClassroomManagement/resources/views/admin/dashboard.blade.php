@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin role</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="card">
                                <div class="card-header">Users</div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <a href="{{ route('admin.user.register') }}" class="btn btn-info" role="button">Register user</a>
                                    <a href="{{ route('admin.user.list') }}" class="btn btn-info" role="button">List account</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">Classrooms</div>

                                <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <a href="{{ route('admin.classroom.create') }}" class="btn btn-info" role="button">Classroom create</a>
                                        <a href="{{ route('admin.classroom.list') }}" class="btn btn-info" role="button">Classroom list</a>


                                </div>
                            </div>
            </div>
        </div>
    </div>
@endsection
